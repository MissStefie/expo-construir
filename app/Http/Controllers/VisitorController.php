<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionForm;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VisitorController extends Controller
{
    
    public function index()
    {
        return view('inicio');
    }

    
    public function crear()
    {
        //
    }
    
    
    public function registrar(ValidacionForm $request)
    {
        Log::info('Se recibió una solicitud para registrar un visitante.');
        Visitor::create($request->all());
        return redirect()->route('confirmacion')->with('mensaje', 'Visitante registrado con éxito');
        //return redirect('/')->with('mensaje', 'Visitante registrado con exito');
    }

    public function confirmacion()
    {
        return view('confirmacion/ventana');
    }

   
    public function editar(string $id)
    {
        //
    }

    
    public function actualizar(Request $request, string $id)
    {
        //
    }

    
    public function eliminar(string $id)
    {
        //
    }
}
