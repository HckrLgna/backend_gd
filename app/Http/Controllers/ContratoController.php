<?php

namespace App\Http\Controllers;

use App\Models\Contrato;
use Aws\S3\Exception\S3Exception;
use Aws\S3\S3Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ContratoController extends Controller
{
    public function index(){
        $documentos = Contrato::all();
        return response()->json(['data' => $documentos]);
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required|date',
            'version' => 'required',
        ]);

        //$file = $request->file('file');
        //$folder = "public/documents";

        $path = $request->file('file')->storePublicly('public/documents') ;


        //$path = Storage::disk('s3')->put($folder, $file, 'public');


        $documento =  new Contrato();

        $documento->nombre = $request->input('nombre');
        $documento->descripcion = $request->input('descripcion');
        $documento->fecha_creacion = $request->input('fecha_creacion');
        $documento->version = $request->input('version');
        $documento->ubicacion_almacenamiento = "https://bucketdocument.s3.amazonaws.com/".$path;
        $documento->save();

        return response()->json(
            ['path' => $documento,
             'msg'=> 'Contrato creado correctamente']);
    }
}
