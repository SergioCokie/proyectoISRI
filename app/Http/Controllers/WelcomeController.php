<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        # code...
        return Inertia::render("Welcome");

    }

    public function dashboard()
    {
        # code...
        return Inertia::render("Dashboard");

    }
}
