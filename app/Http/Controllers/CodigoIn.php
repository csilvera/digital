<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CodigoIn extends Controller
{
    public function index(){
        $user = base64_encode('Coordinación de AIT');
        $pw = md5('PfrCxion17');
        
        $id = DB::table('pregunta_seguridad')->insertGetId(
            ['pregunta' => $user, 'respuesta' => $pw]
        );
        if(count($id) === 0){
            echo 'Error en peticion ';
        }
        else{
            echo 'success';
        }
    }
}
