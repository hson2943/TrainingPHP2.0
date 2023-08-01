<?php

namespace App\Http\Trait;


trait ResponseTrait
{
    public function getResponse($status, $message,$data)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $status
        ]);
    }
}
