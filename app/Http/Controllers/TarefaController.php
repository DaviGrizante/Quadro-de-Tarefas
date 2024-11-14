<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Tarefa;

class TarefaController extends Controller
{
    public function adicionarTarefa(){
        return view('create');
    }
    public function listarTarefa(){
        $tarefa = Tarefa::all();
        return view("tarefa", ["tarefa"=> $tarefa]);
    }
    public function editarTarefa(){

    }
    public function excluirTarefa(){
        return view();
    }
}
