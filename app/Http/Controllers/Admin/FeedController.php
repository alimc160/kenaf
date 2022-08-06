<?php

namespace App\Http\Controllers\Admin;

use App\Feed;
use App\Http\Controllers\Controller;
use App\Services\FeedService;
use App\Utils\AppConst;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * @var FeedService
     */
    private $feedService;
    /**
     * @var Feed
     */
    private $feed;

    public function __construct()
    {
        $this->feedService =new FeedService();
        $this->feed = new Feed;
    }

    public function index(Request $request)
    {
        $data = [];
        $data['feeds']=$this->feedService->getFeed(10,10,$request,true);
        $data['i'] = ($request->input('page', 1) - 1) * 10;
        return view('admin.feed.index',compact('data'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        try {
            $feed=$this->feed->findOrFail($id);
            return view('admin.feed.show',compact('feed'));
        }catch (\Exception $exception){
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
            $feed=$this->feed->findOrFail($id);
            $feed->delete();
            \request()->session()->flash('success','Feed deleted successfully!');
            return back();
        }catch (\Exception $exception){
            error_logs($exception);
            \request()->session()->flash('error',$exception->getMessage());
            return back();
        }
    }

    /**
     * @param Request $request
     * @return array
     */
    public function addFeeds(Request $request)
    {
        if ($request->isMethod('get')){
            $data1 = config('app.feed_dummy_data.data1');
        }
        $response=$this->feedService->addFeed($data1);

        if ($request->isMethod('get')){
            $data2 = config('app.feed_dummy_data.data2');
        }
        $response=$this->feedService->addFeed($data2);

        if ($request->isMethod('get')){
            $data3 = config('app.feed_dummy_data.data3');
        }
        $response=$this->feedService->addFeed($data3);
//
        if ($request->isMethod('get')){
            $data4=config('app.feed_dummy_data.data4');
        }
        $response=$this->feedService->addFeed($data4);
//
        if ($request->isMethod('get')){
            $data5 = config('app.feed_dummy_data.data5');
        }
        $response=$this->feedService->addFeed($data5);
//
        if ($request->isMethod('get')){
            $data6=config('app.feed_dummy_data.data6');
        }
        $response=$this->feedService->addFeed($data6);
//
        if ($request->isMethod('get')){
            $data7=config('app.feed_dummy_data.data7');
        }
        $response=$this->feedService->addFeed($data7);
//
        if ($request->isMethod('get')){
            $data8=config('app.feed_dummy_data.data8');
        }
        $response=$this->feedService->addFeed($data8);
//
        if ($request->isMethod('get')){
            $data9=config('app.feed_dummy_data.data9');
        }
        $response=$this->feedService->addFeed($data9);
//
        if ($request->isMethod('get')){
            $data10=config('app.feed_dummy_data.data10');
        }
        $response=$this->feedService->addFeed($data10);

        if ($request->isMethod('get')){
            $data11=config('app.feed_dummy_data.data11');
        }
        $response=$this->feedService->addFeed($data11);

        if ($request->isMethod('get')){
            $data12 = config('app.feed_dummy_data.data12');
        }
        $response=$this->feedService->addFeed($data12);

        if ($request->isMethod('get')){
            $data13=config('app.feed_dummy_data.data13');
        }
        $response=$this->feedService->addFeed($data13);
        return ['status'=>'success','result'=>$response];
    }
}
