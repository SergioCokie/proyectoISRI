<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class RRHHController extends Controller
{
    //
    public function index()
    {
        # code...
        return Inertia::render("RRHH/RRHH_index");

    }
}
