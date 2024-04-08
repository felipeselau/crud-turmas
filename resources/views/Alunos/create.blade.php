@extends('template')

@section('page-title', 'Cadastrar Aluno')

@section('content')
    <div class="flex flex-col gap-4 mt-4 items-center">
        <h2 class="text-center text-xl font-semibold">Cadastrar aluno</h2>
        <form action="{{ route('alunos.store') }}" method="post" class="flex items-stretch flex-col gap-4 w-1/3">
            @csrf
            @method('post')
            <input required type="text" id="alunoNome" name="aluno_nome" class="border border-slate-400 rounded-md px-4 py-2" placeholder="Nome do Aluno...">

            <label for="aluno-imagem" class="text-center text-lg font-semibold">Imagem do Aluno</label>
            <input required type="file" id="aluno_imagem" name="aluno_imagem" class="flex flex-col">

            <label for="aluno_data_nasc">Data de Nascimento</label>
            <input type="date" id="aluno-nasc" name="aluno_data_nasc" required class="border border-slate-400 rounded-md px-4 py-2">

            <button
                class="bg-red-600 text-white font-semibold py-2 px-4 rounded hover:opacity-70"
            >Cadastrar Aluno</button>
        </form>
        <a href="/alunos" class="text-red-600 hover:opacity-70 hover:underline">Voltar</a>
    </div>
@endsection
