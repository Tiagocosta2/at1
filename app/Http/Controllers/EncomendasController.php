<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encomenda;

class EncomendasController extends Controller
{
    //
    public function index() {
    	$encomendas = Encomenda::all();

    	return view('encomendas.index', [
    		'encomendas'=>$encomendas
    	]);
    }
    public function show(Request $request) {
    	$idEncomenda= $request->id;
    	$encomenda = Encomenda::where('id_encomenda', $idEncomenda)->with(['clientes','vendedores','produtos'])->first();
    	return view('encomendas.show', [
    		'encomenda'=>$encomenda
    	]);
    }
    public function mostrar (Request $request){
        $caixa = $request->$caixa;
        $encomenda= Encomenda::where('nome','like','%')->with('clientes')->first();
        return view('encomendas.mostrar', [
            'encomenda'=>$encomenda
        ]);
    }
}
