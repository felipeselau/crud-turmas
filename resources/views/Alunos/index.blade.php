@extends('template')
@section('page-title', 'Alunos')

@section('content')
    <div
        class="flex flex-col gap-4 mt-4"
    >
        <h2 class="text-center text-xl font-semibold">Gerenciar Alunos</h2>
        <div class="actions flex items-center justify-around">
            <h2 class="text-lg font-semibold">Alunos Cadastradas: </h2>
            <button>
                <a 
                href="/alunos/create"
                class="bg-red-600 text-white font-bold py-2 px-8 rounded"
                >Cadastrar Aluno</a>
            </button>
        </div>
        <div class="alunos-container">
            @foreach ($alunos as $aluno)
                <div class="card-aluno">
                    <div class="card-img">
                        {{ $aluno->aluno_foto }}
                    </div>
                    <div class="card-body">
                        {{ $aluno->aluno_nome }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection