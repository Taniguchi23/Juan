<?php

namespace App\Http\Controllers;

use App\Helpers\VisaHelper;
use App\Models\Producto;
use App\Models\Venta;
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
        $transactionToken = $request->transactionToken;
        $customerEmail = $request->customerEmail;
        $amount = $request->amount;
        $purchaseNumber = $request->purchaseNumber;
        $channel = $request->channel;
        $token = VisaHelper::generateToken();
        $data = VisaHelper::generateAuthorization($amount, $purchaseNumber, $transactionToken, $token);

        // Registrar la compra en la base de datos
        Venta::create([
            'transaction_token' => $transactionToken,
            'customer_email' => $customerEmail,
            'amount' => $amount,
            'purchase_number' => $purchaseNumber,
            'channel' => $channel,
            'response_data' => $data,
        ]);
        
        return view('productos.finalizar', compact('data','purchaseNumber'));
    }
}
