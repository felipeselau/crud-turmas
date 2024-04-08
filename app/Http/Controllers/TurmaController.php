<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use Illuminate\Http\Request;

class TurmaController extends Controller
{
    public function index(){
        $turmas = Turma::all();
        return view('Turmas.index', ['turmas' => $turmas]);
    }

    public function create(){
        return view('Turmas.create');
    }

    public function store(Request $request){
        //validacoes
        $data = $request->validate([
            'turma_nome' => 'required',
            'turma_imagem' => 'required'
        ]);

        //mudar nome da imagem
        $imagem = $data['turma_imagem'];
        $newImgName = md5(time()).".".$imagem->getClientOriginalExtension();
        $imagem->storeAs('/public/img', $newImgName);
        $data['turma_imagem'] = $newImgName;

        // $imagem = $request->file('turma_imagem');
        // $newImgName = md5(time()).".".$imagem->getClientOriginalExtension();

        // $imagem->storeAs('public/img', $newImgName);
        
        //dd($data['turma_imagem'], $newImgName);

        Turma::create($data);

        return redirect(route('turmas.index'));

    }
}
