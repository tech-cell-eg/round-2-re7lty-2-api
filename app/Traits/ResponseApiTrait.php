<?php

namespace App\Traits;

trait ResponseApiTrait
{
    /**
     * Send a success response
     */
    protected function successResponse($message, $data = null, $statusCode = 200)
    {
        return response()->json([
            'status' => true,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    /**
     * Send an error response
     */
    protected function errorResponse($message, $statusCode = 400)
    {
        return response()->json([
            'status' => false,
            'message' => $message
        ], $statusCode);
    }
}
