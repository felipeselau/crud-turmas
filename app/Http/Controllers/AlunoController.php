<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index(){
        $alunos = Aluno::all();
        return view('Alunos.index', ['alunos' => $alunos]);
    }

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request){
        
        $data = $request;

        dd($data);

        //$newAluno = Aluno::create($data);

        //return redirect(route('alunos.index'));
    }
}
