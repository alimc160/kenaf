<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\EntityService;
use App\Utils\AppConst;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    public function __construct()
    {
        $this->entityService = new EntityService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = [];
        if($request->filled('page')){
            $data['entities'] = $this->entityService->getEntities(null,10,$request,true);
        }else{
            $data['entities'] = $this->entityService->getEntities(null,null,$request,false);
        }
        
        $data['i'] = getIterations($request,10);
        return view('admin.entities.index',compact('data'));
    }
}
