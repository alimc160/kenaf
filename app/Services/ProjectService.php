<?php

namespace App\Services;
use App\Project;

class ProjectService
{
    /**
     * @var Project
     */
    private $project;

    public function __construct()
    {
        $this->project = new Project;
    }
    public function getProjects($perPage=10,$page, $request, $paginate=false){
        $project = $this->project;
        $total = 0;
        if($paginate == false){
            $project =$project->orderBy('id','desc')->get();
            $total = $project->count();
        }else{
            $project =$project->orderBy('id','desc');
            $total = $project->get()->count();
            $project =$project->paginate($page);
        }
        return ['result'=>$project,'total'=>$total];
    }

    /**
     * @param $request
     * @param $user
     * @return array
     */
    public function createProject($request,$user){
        $project = $this->project->create(array_merge($request, ['created_by'=>$user->id]));
        return ['status'=>'success','result'=>$project];
    }

    /**
     * @param $userId
     * @return mixed
     */
    public function getUserProjects($user)
    {
        return $this->project->where('created_by',$user->id)->orderBy('id','desc')->get();
    }
}
