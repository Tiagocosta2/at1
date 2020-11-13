<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    //
    public function index() {
    	$produtos = Produto::all();

    	return view('produtos.index', [
    		'produtos'=>$produtos
    	]);
    }
}