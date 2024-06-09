<?php

namespace App\Http\Controllers;

use App\Helpers\VisaHelper;
use App\Models\producto;
use Illuminate\Http\Request;

class NiubizPaymentController extends Controller
{
    public function productos (){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function comprar (Request $request){
        $producto = Producto::find($request->id);
        $token =  VisaHelper::generateToken();
        $session = VisaHelper::generateSession($producto->price,$token);
        $purchaseNumber = VisaHelper::generatePurchaseNumber();
        return view('productos.comprar', compact('session','purchaseNumber','producto'));
    }

    public function finalizar(Request $request){
        dd(666);
        $transactionToken = $request->transactionToken;
        $customerEmail = $request->customerEmail;
        $amount = $request->amount;
        $purchaseNumber = $request->purchaseNumber;
        $channel = $request->channel;

        $token = VisaHelper::generateToken();
        $data = VisaHelper::generateAuthorization($amount, $purchaseNumber, $transactionToken, $token);

        return view('productos.finalizar', compact('data','purchaseNumber'));
    }
}
