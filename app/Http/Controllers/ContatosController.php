<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatosController extends Controller
{

    //metados para criação, editação, atualização e exclução de contato;

    public function index()
    {

        $contatos = Contato::all();

        return view('contato.index', compact('contatos'));
    }



    public function create()
    {
        return view('contato.form');
    }

    

    public function store(Request $request)
    {
        try {
            Contato::create($request->all());
            flash('Contato Salvo Com Sucesso')->success();
        } catch (\Exception $erro) {
            flash('Erro ao Salvar Contato')->error();

            return redirect()->back();
        }

        return redirect('/contatos');
    }


    public function edit($id)
    {
        $contato = Contato::find($id);

        return view('contato.form', compact('contato'));
    }


    public function update(Request $request, $id)
    {
        $contato = Contato::find($id);

        $contato->update($request->all());

        return redirect('/contatos');
    }


    public function destroy($id)
    {
        $contato = Contato::find($id);
        $contato->delete();

        flash('Cliente excluido com sucesso ')->success();
    }
}
