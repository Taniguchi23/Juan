<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class NiubizPaymentController extends Controller
{
    public function productos (){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function comprar (){

    }
}
