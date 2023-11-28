<?php

namespace App\Http\Controllers;

use App\Models\Documento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class DocumentoController extends Controller
{
    public function index(){
        $documentos = Documento::all();
        return response()->json(['data' => $documentos]);
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'fecha_creacion' => 'required|date',
            'version' => 'required',
        ]);

        $file = $request->file('file');
        $folder = "public/documents";

        //$path = $request->file('file')->store('public/documents') ;

        $path = Storage::disk('s3')->put($folder, $file, 'public');

        $documento =  new Documento();

        $documento->nombre = $request->input('nombre');
        $documento->descripcion = $request->input('descripcion');
        $documento->fecha_creacion = $request->input('fecha_creacion');
        $documento->version = $request->input('version');
        $documento->ubicacion_almacenamiento = $path;
        //$documento->save();

        return response()->json(
            ['path' => $documento,
             'msg'=> 'Documento creado correctamente']);
    }
}
