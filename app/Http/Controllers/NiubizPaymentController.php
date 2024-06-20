<?php

namespace App\Http\Controllers;

use App\Helpers\VisaHelper;
use App\Models\Producto;
use Illuminate\Http\Request;

class NiubizPaymentController extends Controller
{
    public function productos (){
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function comprar (Request $request){

        $initialProducts = [
            [
                'nombre' => 'producto1',
                'precio' => 50.00
            ],
            [
                'nombre' => 'producto2',
                'precio' => 150.00
            ],
            [
                'nombre' => 'producto3',
                'precio' => 250.00
            ],
        ];

        // Obtener los productos de la sesión, si no existe inicializar con los ítems iniciales
        $cart = session()->get('cart', $initialProducts);

        // Guardar los productos en la sesión si aún no están guardados
        if (!session()->has('cart')) {
            session(['cart' => $cart]);
        }



        // Obtener los productos de la sesión
        $cart = session()->get('cart', []);

        // Calcular la suma de los precios de los productos en el carrito
        $total = 0;
        foreach ($cart as $product) {
            $total += $product['precio'];
        }
        dd($total);









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
        //TODO registrar la compra en tu bd
        dd($data);
        return view('productos.finalizar', compact('data','purchaseNumber'));
    }
}
