<?php

namespace App\Http\Controllers;

use App\Models\Security;

class SecurityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $securities = Security::get();
        return response()->json($securities);
    }
}
