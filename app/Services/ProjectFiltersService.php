<?php

namespace App\Services;

use App\Http\Resources\ProjectFilterResource;
use App\ProjectFilter;

class ProjectFiltersService
{
    public function __construct()
    {
        $this->projectFilter = new ProjectFilter;
    }

    /**
     * @param $request
     * @return array
     */
    public function createProjectFilters($request,$user)
    {
        $projectFilter=$this->projectFilter->create(array_merge($request,['created_by'=>$user->id]));
        return ['status'=>'success','result'=>$projectFilter];
    }

    /**
     * @return ProjectFilterResource
     */
    public function getLatestProjectFilter()
    {
        $projectFilter=$this->projectFilter->with('filters', 'entities','project')->latest()->first();
        return new ProjectFilterResource($projectFilter);
    }
}
