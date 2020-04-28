<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponse;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    use ApiResponse;

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if ($request->expectsJson()) {
            $data['message'] = 'Not Authenticated. Please do login1.';
            return response()->json($this->errorResponse($data), 401);
        }
    }
}
