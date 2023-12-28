<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();
        return response()->json([
            'data' => $cliente,

        ]);
    }
}
