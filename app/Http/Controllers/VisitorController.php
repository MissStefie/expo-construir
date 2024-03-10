<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidacionForm;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        //
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function registrar(ValidacionForm $request)
    {
        Log::info('Se recibió una solicitud para registrar un visitante.');
        Visitor::create($request->all());
        return redirect('/')->with('mensaje', 'Visitante registrado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function mostrar(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editar(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function actualizar(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function eliminar(string $id)
    {
        //
    }
}
