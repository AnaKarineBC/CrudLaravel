<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function store(Request $request){

        $dados_validados = $request->validate([
            'nome' => 'required | max:255',
            'idade' => 'integer',

        ]);

        $p = new Pessoa;
        $p->nome = $dados_validados['nome'];
        $p->nome = $dados_validados['idade'];
        $p->save();


        return redirect()->back()->with('successtotal', 'Cadastro realizado com sucesso!!')
    }
}
