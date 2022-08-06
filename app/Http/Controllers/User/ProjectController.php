<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Project;
use Illuminate\Http\Request;
use App\Services\ProjectService;
use Illuminate\Support\Facades\Auth;
use App\Services\EntityService;
use App\Services\FeedService;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->projectService = new ProjectService;
        $this->entityService = new EntityService;
        $this->feedService = new FeedService;
        $this->project = new Project;

        view()->share('projectId', request()->route('project'));
    }

    public function index(Project $project,Request $request){
        $data = [];
        $data['project'] = $project;

        $data['entities'] = $this->entityService->getEntities(null, null, null);
        $data['entitiesResult'] = $data['entities']['result']->take(5);
        $data['entities_total'] = $data['entities']['total'];
        if ($request->ajax()){
            if ($request->value == "more"){
                $data['entitiesResult'] = $data['entities']['result'];
            }
            return view('partials._get-entities-data',compact('data'));
        }
        $data['feeds'] = $this->feedService->getLatestFeeds();
        return view('user.dashboard', compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id){
        try {
            $project=$this->project->find($id);
            $previousRouteName=app('router')->getRoutes()->match(app('request')->create(url()->previous()))->getName();
            $project->delete();
            $projects = $this->projectService->getUserProjects(Auth::user());
            cache()->forget('projects');
            cache()->add('projects', $projects);
            \request()->session()->flash('success','Project deleted successfully!');
            if ($previousRouteName == "user.project"){
                return redirect()->route('user.dashboard');
            }
            return back();
        }catch (\Exception $exception){
            error_logs($exception);
            \request()->session()->flash('error',$exception->getMessage());
            return back();
        }
    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getProjectsList(Request $request){
        try {
            $projects = Cache::get('projects');
            if ( isset($projects) && count($projects)){
                $projects = ProjectResource::collection($projects);
                return ['status'=>'success','result'=>$projects];
            }
            return ['status'=>'fail','result'=>null];
        }catch (\Exception $exception){
            error_logs($exception);
            return ['status','fail','message'=>$exception->getMessage()];
        }
    }
}
