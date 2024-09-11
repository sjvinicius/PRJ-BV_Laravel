<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{   
    /*
    *Função utilizada para ... 
    */
     public function index()
     {
            $produtos = Product::all();

            $diasSemana = [
                'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado', 'Domingo'
            ];
    
            return view('products', [
                'produtos' => $produtos,
                'diasSemana' => $diasSemana
            ]);
     }

     public function store(Request $request)
    {
        $request->validate([
            'product-name' => 'required|string|max:50',
            'product-price' => 'required|numeric',
            'product-description' => 'required|string|max:300',
            'product-image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'day-of-week' => 'required|integer|between:1,7',
        ]);


        $imagePath = $request->file('product-image')->store('public/produtos');

        Product::create([
            'NOME' => $request->input('product-name'),
            'VALORMEDIDA' => $request->input('product-price'),
            'INFOADD' => $request->input('product-description'),
            'IMAGEM' => str_replace('public/', '', $imagePath),
            'DIA_SEMANA' => $request->input('day-of-week'),
            'STATUS' => 'A',
            'CRIACAO_TOKEN' => 'token',
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }
}