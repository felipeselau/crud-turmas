@extends('template')

@section('page-title', 'Criar Turma')

@section('content')
    <div class="flex flex-col gap-4 mt-4 items-center">
        <h2 class="text-center text-xl font-semibold">Adicionar Turma</h2>
        <form action="{{ route('turmas.store') }}" enctype="multipart/form-data" method="post" class="flex items-stretch flex-col gap-4 w-1/3">
            @csrf
            @method('post')
            <input required type="text" id="turmaNome" name="turma_nome" class="border border-slate-400 rounded-md px-4 py-2" placeholder="Nome da Turma...">

            <label for="turma-imagem" class="text-center text-lg font-semibold">Imagem da Turma</label>
            <input required type="file" accept="jpg png jpeg webp" id="turma_imagem" name="turma_imagem" class=" flex flex-col">

            <button
                class="bg-red-600 text-white font-semibold py-2 px-4 rounded hover:opacity-70"
            >Criar Turma</button>
        </form>
        <a href="/turmas" class="text-red-600 hover:opacity-70 hover:underline">Voltar</a>
    </div>
@endsection
