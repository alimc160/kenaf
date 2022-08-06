<?php

namespace App\Services;

use App\FilterAttr;
use App\Http\Resources\FilterAttrResource;
use App\Http\Resources\ProjectFilterResource;
use App\ProjectFilter;
use Illuminate\Support\Facades\Auth;

class FilterService
{
    public function __construct()
    {
        $this->filterAttr = new FilterAttr;
        $this->projectFilter = new ProjectFilter;
    }

    public function getFiltersAttr($perPage = 10, $page, $request, $userId, $paginate = false)
    {
        $filters = $this->filterAttr->with('user');
        $total = 0;
        if ($paginate == false) {
            $filters = $filters->orderBy('id', 'desc')->where('created_by', $userId)->get();
            $total = $filters->count();
        } else {
            $filters = $filters->orderBy('id', 'desc');
            $total = $filters->get()->count();
            $filters = $filters->paginate($page);
        }
        return ['result' => $filters, 'total' => $total];
    }

    public function createFilterAttr($request, $user)
    {
        $filter = $this->filterAttr->create(array_merge($request, ['created_by' => $user->id]));
        return ['status' => 'success', 'result' => $filter];
    }

    /**
     * @param $request
     * @return array
     */
    public function getSavedFilters($request, $user)
    {
        if (isset($request['project_id'])) {
            $list = $this->projectFilter->where('project_id', $request['project_id'])
                ->with('filters', 'entities','project')
                ->orderBy('id','DESC')
                ->get();
            $filtersEntitiesList = ProjectFilterResource::collection($list);
            return ['status' => 'success', 'result' => $filtersEntitiesList];
        }
        $data = $this->projectFilter->with(['filters', 'entities', 'project'])
            ->orderBy('id','DESC')
            ->where('created_by', $user->id)->get();
        $filters = ProjectFilterResource::collection($data);
        return ['status' => 'success', 'result' => $filters];
    }
}
