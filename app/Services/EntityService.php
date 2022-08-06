<?php

namespace App\Services;

use App\Entity;
use App\Http\Resources\EntityResource;

class EntityService
{
    /**
     * @var Entity
     */
    private $entity;
    public function __construct()
    {
        $this->entity = new Entity;
    }

    public function getEntities($perPage=10,$page, $request, $paginate=false){
        $entity = $this->entity->with('feed');
        $total = 0;
        if($paginate == false){
            $entity =$entity->orderBy('id','desc')->get();
            $total = $entity->count();
        }else{
            $entity =$entity->orderBy('id','desc');
            $total = $entity->get()->count();
            $entity =$entity->paginate($page);
            return ['result'=>$entity,'total'=>$total,'next_flag'=>true];
        }
        return ['result'=>$entity,'total'=>$total];
    }
    public function createEntity($request,$feedId){
        $entity=$this->entity->create([
            'type'=>$request->type,
            'title'=>$request->normalized,
            'feed_id'=>$feedId
        ]);
        return ['status'=>'success','result'=>$entity];
    }
}
