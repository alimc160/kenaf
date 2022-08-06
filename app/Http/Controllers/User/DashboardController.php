<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\EntityService;
use App\Services\FeedService;
use App\Services\ProjectService;
use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * @var EntityService
     */
    private $entityService;

    public function __construct()
    {
        $this->projectService = new ProjectService;
        $this->entityService = new EntityService;
        $this->feedService = new FeedService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request){
        try {
            $data = [];
            $data['entities'] = $this->entityService->getEntities(null, null, null);
            $data['projects'] = Project::all();
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
        }catch (\Exception $exception){
            error_logs($exception);
            $request->session()->flash('error',$exception->getMessage());
            return back();
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addProject(Request $request){
        $request->validate([
            'title' => 'required|max:250',
        ]);
        try {
            $response = $this->projectService->createProject($request->all(), Auth::user());
            if ($response['status'] == "success") {
                $request->session()->flash('success', 'Project has been created successfully!');
                $projects = $this->projectService->getUserProjects(Auth::user());

                cache()->forget('projects');
                cache()->add('projects', $projects);
                return back();
            }
            $request->session()->flash('error', 'Something went wrong!');
            return back();
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back();
        }
    }

}
