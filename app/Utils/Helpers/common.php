<?php

/**
 * @return string
 */
function mapKey(): string
{
    return "AIzaSyCjLznE1HvAPt2Vg91S4xmjULhQ2LOr9Ag";
}

/**
 * @param $exception
 * @return mixed
 */
function error_logs($exception){
    return \Log::channel('error_log')
        ->error('Message: '.$exception->getMessage().','.'Code: '.$exception->getCode());
}

function errorTextLog($error){
    return \Log::channel('error_log')
        ->error('Message: '.$error);
}

/**
 * @param $exception
 * @return mixed
 */
function debug_logs($exception){
    return \Log::channel('debug')
        ->debug('Message: '.$exception->getMessage().','.'Code: '.$exception->getCode());
}

/**
 * @param $request
 * @param $page
 * @return float|int
 */
function getIterations($request,$page){
    return ($request->input('page', 1) - 1) * $page;
}
