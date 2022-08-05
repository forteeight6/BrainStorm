<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
    	# refere-se ao resources\views\produtos\create.blade.php
    	return view('produtos.create');
    }

    public function store(Request $request)
    {
    	# dd($request->all());
    	Produto::create([
    		'nome' => $request->nome,
    		'custo' => $request->custo,
    		'preco' => $request->preco,
    		'quantidade' => $request->quantidade,
    	]);

    	return "Produto Criado com Sucesso!";
    }

    public function show($id)
    {
        // $produto = Produto::findOrFail($id);
        // $produto = Produto::where('id', '=', $id)->first();
        // $produto = Produto::where('id', $id)->first();
        // $produto = Produto::find($id);
        if (!$produto = Produto::find($id))
            // return redirect()->back()
            // return back()
            return redirect()->route('listar_produto');

        // dd('produtos.show', $id);

        // return view('produtos.show', ['produto' => $produto]);
        return view('produtos.show', compact('produto'));
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto Atualizado com Sucesso!";
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();
        
        return "Produto Excluído com Sucesso";
    }

    public function list(Request $request) 
    {
        // dd($request->search);
        // $produtos = Produto::get();
        // $produtos = Produto::where('nome', 'LIKE', "%{$request->search}%")->get();
        $search = $request->search;
        $produtos = Produto::where(function ($query) use ($search) {
            if ($search) {
                $query->where('id', "$search");
                $query->orWhere('nome', 'LIKE', "%{$search}%");
            }
        })->get();
        // $produtos = Produto::where('nome', 'LIKE', "%{$request->nome}%")->toSql();
        // dd($produtos);

        return view('produtos.list', compact('produtos'));
    }
}
