<?php

namespace App\Http\Controllers\User;

use App\Entity;
use App\FilterAttr;
use App\Http\Controllers\Controller;
use App\Http\Resources\FilterResource;
use App\Project;
use App\ProjectFilter;
use App\Services\EntityService;
use App\Services\FilterService;
use App\Services\ProjectFiltersService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Auth;

class FilterController extends Controller
{
    /**
     * @FilterController construct
     */
    public function __construct()
    {
        $this->filterService = new FilterService;
        $this->entityService = new EntityService;
        $this->entity = new Entity;
        $this->project = new Project;
        $this->projectFilterService = new ProjectFiltersService;
        $this->filterAttr = new FilterAttr;
        $this->projectFilter = new ProjectFilter;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $data = [];
            $filters = $this->filterService->getFiltersAttr(null, null, $request->all(), $request->user()->id);
            $response = FilterResource::collection($filters['result']);
            $data['result'] = $response;
            $data['total'] = $filters['total'];
            return response()->json($data, 200);
        } catch (\Exception $exception) {
            error_logs($exception);
            return response()->json(['status' => 'fail', 'message' => $exception->getMessage()], $exception->getCode());
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function addFilter(Request $request){
        $request->validate([
            'title' => 'required',
            'filters_attr' => Rule::requiredIf(function () use($request){
                return !count($request->entities) ;
            }),
            'entities' => Rule::requiredIf(function () use($request){
                return !count($request->filters_attr);
            }),
            'project_id'=>'required'
        ]);
        try {
            $filters = $request->filters_attr;
            $entities = $request->entities;
            $projectFilters = $this->projectFilterService->createProjectFilters($request->except('filters_attr','entities'),auth()->user());
            if (count($filters)){
                foreach ($filters as $filter){
                    $requestData = ['title'=>$filter];
                    $filtersAttr = $this->filterAttr->where([
                        'created_by'=>$request->user()->id,
                        'title'=>$filter
                    ])->first();
                    if ($filtersAttr){
                        $projectFilters['result']->filters()->attach($filtersAttr->id);
                    }else{
                        $res=$this->filterService->createFilterAttr($requestData,$request->user());
                        $projectFilters['result']->filters()->attach(
                            $res['result']->id
                        );
                    }
                }
            }
            if (count($entities)){
                foreach ($entities as $entityId){
                    $entity=$this->entity->find($entityId);
                    $projectFilters['result']->entities()->attach(
                        $entity->id
                    );
                }
            }
            $projectFilter = $this->projectFilterService->getLatestProjectFilter();
            return response()->json(['status'=>'success','message'=>'Filter added successfully!','result'=>$projectFilter]);
        }catch (\Exception $exception){
            error_logs($exception);
            return response()->json(['status'=>'fail','message'=>$exception->getMessage()],$exception->getCode());
        }

    }

    /**
     * @param Request $request
     * @return array|\Illuminate\Http\JsonResponse
     */
    public function getSavedFilterListing(Request $request)
    {
        try {
            return $this->filterService->getSavedFilters($request->all(),auth()->user());
        }catch (\Exception $exception){
            error_logs($exception);
            return response()->json(['status'=>'fail','message'=>$exception->getMessage()],500);
        }

    }
}
