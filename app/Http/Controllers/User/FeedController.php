<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\FeedResource;
use App\Services\FeedService;
use http\Env\Response;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __construct()
    {
        $this->feedService = new FeedService;
    }

    public function feedListing(Request $request)
    {
        try {
            $data = [];
            $input = [];
            if (isset($request->lang)){
                $input['search']['lang'] = $request->lang;
            }
            if (isset($request->city)){
                $input['search']['city'] = $request->city;
            }
            $request->merge($input);
            if($request->filled('page')){
                $feeds=$this->feedService->getFeed(10,$request->page,$request->all(),true);
                $data['current_page'] = $feeds['result']->currentPage();
                $data['result'] =FeedResource::collection($feeds['result']);
                $data['first_page_url'] = $feeds['result']->toArray()['first_page_url'];
                $data['last_page'] = $feeds['result']->lastPage();
                $data['last_page_url'] = $feeds['result']->toArray()['last_page_url'];
                $data['next_page_url'] = $feeds['result']->nextPageUrl();
                $data['path'] = $feeds['result']->path();
                $data['per_page'] = $feeds['result']->perPage();
                $data['prev_page_url'] = $feeds['result']->previousPageUrl();
                $data['total'] = $feeds['result']->total();
            }else{
                $feeds=$this->feedService->getFeed(null,null,$request->all());
                $data['total'] = $feeds['total'];
                $data['result'] = FeedResource::collection($feeds['result']);
            }

            $data['status'] = 'success';

            return $data;
        }catch (\Exception $exception){
            error_logs($exception);
            return \response()->json(['status'=>'fail','message'=>$exception->getMessage()]);
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function searchFilter(Request $request)
    {
        try {
            $input = [];
            if (isset($request->lang)){
                $input['search']['lang'] = $request->lang;
            }
            if (isset($request->city)){
                $input['search']['city'] = $request->city;
            }
            if (isset($request->project_id)){
                $input['search']['project_id'] = $request->project_id;
            }
            $request->merge($input);
            $feeds=$this->feedService->getFeed(null,null,$request->all());
            $response = FeedResource::collection($feeds['result']);
            return ['result' => $response, 'total' => $feeds['total']];
        }catch (\Exception $exception){
            error_logs($exception);
            return ['status'=>'fail','message'=>$exception->getMessage()];
        }
    }
}
