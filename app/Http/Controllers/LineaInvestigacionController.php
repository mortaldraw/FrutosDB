<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\LineaInvestigacion;
use App\Proyecto;
use App\Http\Requests;

class LineaInvestigacionController extends Controller
{
    public function index(){
		$lineaInvestigacion = LineaInvestigacion::all();
        return \Response::json($lineaInvestigacion);
    }

    public function create(){
        
    }

    public function store(){

    }

    public function show(LineaInvestigacion $lineaInvestigacion){
        $proyectos = Proyecto::where("id_linea_investigacion", "=", $lineaInvestigacion->id)->get();
        return view('linea', array(
            "linea" => $lineaInvestigacion,
            "proyectos" => $proyectos
        ));
    }

    public function edit(LineaInvestigacion $lineaInvestigacion){
        
    }
    
    public function update(LineaInvestigacion $lineaInvestigacion){
        
    }

    public function destroy(LineaInvestigacion $lineaInvestigacion){
        
        $lineaInvestigacion->delete();
        $response = [
            'status' => 'success'
        ];
        return \Response::json($response);
    }
}
