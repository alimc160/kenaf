<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\EntityResource;
use Illuminate\Http\Request;
use App\Services\EntityService;

class EntityController extends Controller
{
    public function __construct()
    {
        $this->entityService = new EntityService;
    }

    public function index(Request $request, EntityService $entityService){
        $data = [];
        if($request->filled('page')){
            $data['entities'] = $entityService->getEntities(null,10,$request,true);
        }else{
            $data['entities'] = $entityService->getEntities(null,null,$request,true);
        }
        
        $data['i'] = getIterations($request,10);
        return view('user.entities',compact('data'));
    }

    public function entities(Request $request)
    {
        try {
            $data = [];
            $entities = $this->entityService->getEntities(null,10,$request,true);
            $data['current_page'] = $entities['result']->currentPage();
            $data['result'] = EntityResource::collection($entities['result']);
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
