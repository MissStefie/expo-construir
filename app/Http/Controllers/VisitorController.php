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

    public function registrar(ValidacionForm $request)
    {
        Log::info('Se recibió una solicitud para registrar un visitante.');
        Visitor::create($request->all());
        return redirect()->route('confirmacion');
    }

    public function confirmacion()
    {
        return view('confirmacion/ventana');
    }

}
