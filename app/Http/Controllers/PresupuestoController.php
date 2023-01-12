<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class PresupuestoController extends Controller
{
    //
    public function index()
    {
        # code...
        return Inertia::render("Presupuesto/Presupuesto_index");
        
    }
    public function opcion2()
    {
        # code...
        return Inertia::render("Presupuesto/Opcion2");
        
    }
    public function opcion3()
    {
        # code...
        return Inertia::render("Presupuesto/Opcion3");
        
    }
    public function opcion4()
    {
        # code...
        return Inertia::render("Presupuesto/Opcion4");
        
    }

}
