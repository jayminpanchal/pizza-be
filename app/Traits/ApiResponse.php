<?php


namespace App\Traits;


trait ApiResponse
{
    public function successResponse($data)
    {
        $response['status'] = true;
        $response['data'] = $data;
        return $response;
    }

    public function errorResponse($data)
    {
        $response['status'] = false;
        $response['error'] = $data;
        return $response;
    }
}