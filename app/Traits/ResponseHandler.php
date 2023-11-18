<?php 

namespace App\Traits;

trait ResponseHandler
{
    public function successResponse($status = "success", $data = [])
    {
        return response()->json([
            'status' => $status,
            'data' => $data
        ]);
    }

    public function failResponse($status = "error", $data = [])
    {
        return response()->json([
            'status' => $status,
            'data' => $data
        ]);
    }
}