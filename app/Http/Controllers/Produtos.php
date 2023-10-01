<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Produtos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtoModel = new Produto;
        $listaProdutos = $produtoModel->all();
        // $listaProdutos = $produtoModel
        // ->select(['titulo','preco'])->where(['id'=>28])->get();

        return view('produtos/index', compact('listaProdutos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $titulo = 'Erva Mate';
        // $descricao = 'Não é cha e nem café.';
        // $preco = 10.00;
        // $estoque = 1000;

        $input = [
            'titulo'    => 'ERVA MATE',
            'descricao' => 'Não é cha e nem café.',
            'preco'     => 2.21,
            'estoque'   => 1
        ];
        //https://laravel.com/docs/10.x/validation#available-validation-rules
        //VALIDATE
        $dadoValidado = Validator::make(
            $input,
            [
                'titulo'    => 'required|min:3',
                'descricao' => 'required|min:20',
                'preco'     => 'required|decimal:1,2',
                'estoque'   => 'required'
            ]
        );
        if ($dadoValidado->errors()->any()) {
            foreach ($dadoValidado->errors()->all() as $error) {
                echo $error;
            }
            echo 'Altere os dados antes de prosseguir';
        } else {
            $produto = Produto::create($dadoValidado->validate());
            echo 'Produto Criado:' . $produto->id;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produto = Produto::find($id);
        return view('produtos/show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // ter os dados que serão incluidos na tela
        $input = [
            'titulo'    => 'CAFE',
            'descricao' => 'Não é cha e nem café.',
            'preco'     => 2.21,
            'estoque'   => 1
        ];

        //https://laravel.com/docs/10.x/validation#available-validation-rules
        //VALIDATE
        $dadoValidado = Validator::make(
            $input,
            [
                'titulo'    => 'required|min:3',
                'descricao' => 'required|min:20',
                'preco'     => 'required|decimal:1,2',
                'estoque'   => 'required'
            ]
        );
        if ($dadoValidado->errors()->any()) {
            foreach ($dadoValidado->errors()->all() as $error) {
                echo $error;
            }
            echo 'Altere os dados antes de prosseguir';
        } else {
            $dados = $dadoValidado->validate();
            $produto = Produto::find($id);
            $produto->titulo = $dados['titulo'];
            $produto->titulo = $dados['descricao'];
            $produto->titulo = $dados['preco'];
            $produto->titulo = $dados['estoque'];

            $produto->save();
            echo 'Produto editado:' . $produto->id;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = new Produto;
        $produto = $model->find($id);
        $produto->delete();

        echo 'Produto deletado:' . $produto->id;
    }
}
