<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato as ContatoModel;

class Contato extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //print_r($request->all());
        $storeData = $request->validate(
            [
                'email'    => 'required|email',
                'assunto'  => 'required|min:3',
                'mensagem' => 'required|min:20',
            ]
        );
        //print_r($storeData);
        if (ContatoModel::create($storeData)) {
            return redirect('/contato')
                ->with('sucesso', 'Contato enviado com sucesso!');
        } else {
            // print_r($storeData);
            return redirect()
                ->back()
                ->with('error', 'Ocorreu um erro')
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        //
    }
}
