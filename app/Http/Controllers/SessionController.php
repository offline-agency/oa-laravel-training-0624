<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function testSessionPut(): JsonResponse
    {
        Session::put('hello', 'world');

        return response()->json([
            'message' => 'Session stored'
        ]);
    }
    
    public function testSessionGet(): JsonResponse
    {
        $hello = Session::get('hello');

        return response()->json([
            'message' => $hello
        ]);
    }
}
