<?php

namespace App\Http\Controllers;

//use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;

use App\Mail\Operaciones;

class OperEnvios extends Controller
{
    
    //$orderId
    public function index(Request $request)
    {
        //$order = Order::findOrFail($orderId);

        // Ship order...
        $names = $request -> int;
        $order = $names;
        $email = 'ing.cesarsilvera@outlook.com';

        Mail::to($email)->send(new Operaciones($order));

        return 'Mensaje Enviado';
    }
}
