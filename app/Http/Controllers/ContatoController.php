<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ContatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contatos = Contato::all();

        return view('contato.index', array('contatos' => $contatos));
    }

    public function create()
    {
        return view('contato.create');
    }

    public function store(Request $request)
    {
//        $contato = new Contato();
//
//        $contato->nome      = $request->nome;
//        $contato->telefone  = $request->telefone;
//        $contato->email     = $request->email;
//        $contato->save();

        $input = $request->all();

        Contato::create($input);

        return redirect('/contato');
    }

    public function show($id)
    {
        $contato = Contato::findOrFail($id);

        return view('contato.show', array('contato' => $contato));
    }

    public function edit($id)
    {
        $contato = Contato::findOrFail($id);

        return view('contato.edit', array('contato' => $contato));
    }

    public function update(Request $request, $id)
    {
        $contato = Contato::findOrFail($id);

        $input = $request->all();

        $contato->fill($input)->save();

        return redirect('/contato');
    }

    public function destroy($id)
    {
        $contato = Contato::findOrFail($id);
        $contato->delete();

        return redirect('/contato');
    }
}
