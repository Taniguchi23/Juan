<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('web.index');
    }

    public function nosotros(){
        return view('web.nosotros');
    }

    public function servicios(){
        return view('web.servicios');
    }

    public function contacto(){
        return view('web.contacto');
    }
}
