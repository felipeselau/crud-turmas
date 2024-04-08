@extends('template')
@section('page-title', 'Turmas')

@section('content')
    <div
        class="flex flex-col gap-4 mt-4"
    >
        <h2 class="text-center text-xl font-semibold">Gerenciar Turmas</h2>
        <div class="actions flex items-center justify-around">
            <h2 class="text-lg font-semibold">Turmas Cadastradas: </h2>
            <button>
                <a 
                href="/turmas/create"
                class="bg-red-600 text-white font-bold py-2 px-8 rounded"
                >Criar Turma</a>
            </button>
        </div>
        <div class="turmas-container w-full flex items-center px-16 gap-8 mt-8">
            @foreach ($turmas as $turma)
                <div class="card-turma w-1/6 rounded shadow">
                    <div class="card-img">
                        <img 
                        style="height: 300px; width: 100%; object-fit: cover"
                        class="rounded"
                        src="{{ asset('storage/img/'.$turma->turma_imagem) }}" 
                        alt=""
                        >
                    </div>
                    <div class="card-body py-4 flex items-center px-4">
                        <span class="text-lg font-semibold">
                            {{ $turma->turma_nome }}
                        </span>
                    </div>
                    <div class="card-footer flex items-center justify-between px-4 pb-4">
                        <span class="flex items-center">
                            <i class="ph ph-users w-6 text-red-600"></i>: 34
                        </span>
                        <button
                        class="py-2 px-4 bg-red-600 text-white font-semibold rounded hover:opacity-70"
                        >Editar</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection