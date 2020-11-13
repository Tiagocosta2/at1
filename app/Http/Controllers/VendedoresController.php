<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedoresController extends Controller
{
    //
    public function index() {
    	$vendedores = Vendedor::all();

    	return view('vendedores.index', [
    		'vendedores'=>$vendedores
    	]);
    }
}
