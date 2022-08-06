<?php

namespace App\Http\Controllers\Api;

use App\Entity;
use App\Http\Controllers\Controller;
use App\Http\Resources\EntityResource;
use App\Services\EntityService;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function __construct()
    {
        $this->entityService = new EntityService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $data = [];
            $entities = $this->entityService->getEntities(null,10,$request,true);
            $data['current_page'] = $entities['result']->currentPage();
            $data['data'] = EntityResource::collection($entities['result']);
            $data['first_page_url'] = $entities['result']->toArray()['first_page_url'];
            $data['from'] = $entities['result']->firstItem();
            $data['last_page'] = $entities['result']->lastPage();
            $data['last_page_url'] = $entities['result']->toArray()['last_page_url'];
            $data['next_page_url'] = $entities['result']->nextPageUrl();
            $data['path'] = $entities['result']->path();
            $data['per_page'] = $entities['result']->perPage();
            $data['prev_page_url'] = $entities['result']->previousPageUrl();
            $data['to'] = $entities['result']->lastItem();
            $data['total'] = $entities['result']->total();
            return response()->json($data,200);
        }catch (\Exception $exception){
            error_logs($exception);
            return response()->json(['status'=>'fail','message'=>$exception->getMessage()],$exception->getCode());
        }
    }
}
