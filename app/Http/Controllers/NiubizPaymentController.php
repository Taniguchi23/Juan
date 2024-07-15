<?php

namespace App\Http\Controllers;

use App\Helpers\VisaHelper;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;

class NiubizPaymentController extends Controller
{
    public function productos (){
        $productos = Producto::all(); //obtiene todos los productos de la bd y lo manda a la vista para mostrarlos
        return view('productos.index', compact('productos'));
    }

    public function comprar (Request $request){
        $producto = Producto::find($request->id);//obtiene el producto basado en el ID pasado en la solicitud
        $token =  VisaHelper::generateToken(); //genera un token de seguridad para la sesion de pago
        $session = VisaHelper::generateSession($producto->price,$token); //crea una nueva sesion de pago usando el precio y token de seguridad
        $purchaseNumber = VisaHelper::generatePurchaseNumber(); //crea un numero de compra unico
        return view('productos.comprar', compact('session','purchaseNumber','producto')); //devuelve la vvista comprar y pasa la sesion numero de compra y producto
    }

    public function finalizar(Request $request){
        $transactionToken = $request->transactionToken; //token de transaccion del cliente
        $customerEmail = $request->customerEmail; //correo electronico del cliente
        $amount = $request->amount; //monto del pago
        $purchaseNumber = $request->purchaseNumber; //numero de compra
        $channel = $request->channel; //canal de transaccion
        $token = VisaHelper::generateToken(); // genera un token de seguridad necesario para la AUTORIZACION DE PAGO
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
