<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\TurmaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alunos',[AlunoController::class, 'index'])->name('alunos.index');
Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
Route::post('/alunos/create', [AlunoController::class, 'store'])->name('alunos.store');

Route::get('/turmas', [TurmaController::class, 'index'])->name('turmas.index');
Route::get('/turmas/create', [TurmaController::class, 'create'])->name('turmas.create');
Route::post('/turmas/create', [TurmaController::class, 'store'])->name('turmas.store');