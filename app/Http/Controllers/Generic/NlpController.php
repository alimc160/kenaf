<?php

namespace App\Http\Controllers\Generic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\NLPService;
use App\Services\FeedService;

class NLPController extends Controller
{
    public function updateEntityiesAndSentiment(NLPService $nlpService, FeedService $feedService){
        $nlpService->updateEntitiesAndSentiments($feedService);
        return back();
    }

    public function pingRosett(NLPService $nlpService){
        $nlpService->pingRosett();
        return back();
    }
}
