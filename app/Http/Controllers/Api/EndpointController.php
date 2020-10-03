<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Endpoint as EndpointResource;
use Illuminate\Http\Request;

class EndpointController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $endpoints = $user->endpoints->where('parent_id', null)->values()->all();

        return EndpointResource::collection($endpoints);
    }
}
