<?php

namespace App\Http\Controllers;

use App\Models\StatusCode;

class StatusCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = StatusCode::get();
        return response()->json($statuses);
    }
}
