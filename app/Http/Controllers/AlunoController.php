<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Aluno;

class AlunoController extends Controller
{
    public function index(){
        
        $alunos = Aluno::all();
        return view("alunos",["alunos" => $alunos]);
    }

    public function editar($idAluno){
        $aluno = Aluno::find($idAluno);
        return view("alunoEdicao",["aluno" => $aluno]);
    }

    public function gravar(Request $request){
        $aluno = Aluno::findOrNew($request->get("idAluno"));
        $aluno->nome = $request->get("nome");
        $aluno->email = $request->get("email");

        if($aluno->idAluno == ""){
            $aluno->matricula = $request->get("matricula");
        }

        $aluno->save();

        return redirect()->route("aluno.consulta");
    }

    public function novo(){
        return view("alunoForm");
    }

    public function excluir($idAluno){
        $aluno = Aluno::find($idAluno);
        $aluno->delete();
        return redirect()->route("aluno.consulta");
    }
}
