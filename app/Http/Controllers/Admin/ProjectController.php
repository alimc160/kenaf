<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Project;
use App\Services\ProjectService;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * @var ProjectService
     */
    private $projectService;
    /**
     * @var Project
     */
    private $project;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
        $this->project = new Project();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        try {
            $data = [];
            $data['projects'] = $this->projectService->getProjects(10, 10, $request, true);
            $data['i'] = getIterations($request,10);
            return view('admin.projects.index', compact('data'));
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:250',
            'type' => 'required|max:250',
        ]);
        try {
            $response = $this->projectService->createProject($request->all(), auth()->user());
            if ($response['status'] == "success") {
                $request->session()->flash('success', 'Project has been created successfully!');
                if (cache()->get('projects')){
                    cache()->forget('projects');
                    $projects=$this->projectService->getProjects(null,null,null);
                    cache()->add('projects',$projects['result']);
                }
                return redirect()->route('admin.get.project');
            }
            $request->session()->flash('error', 'Something went wrong!');
            return back();
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        try {
            $project = $this->project->find($id);
            return view('admin.projects.show', compact('project'));
        } catch (\Exception $exception) {
            error_logs($exception);
            \request()->session()->flash('error',$exception->getMessage());
            return back();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $project = $this->project->find($id);
            $project->delete();
            \request()->session()->flash('success','Project deleted successfully');
            return back();
        }catch (\Exception $exception){
            error_logs($exception);
            \request()->session()->flash('error'.$exception->getMessage());
            return back();
        }
    }
}
