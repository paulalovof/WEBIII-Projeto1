<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Turma;

class TurmaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $turmas = Turma::all();

        //return view('turma.index', compact('turmas'));
        
        $search = $request->input('search');

        $turmas = Turma::query()
            ->when($search, function ($query, $search) {
                $query->where('nome', 'like', "%{$search}%")
                      ->orWhere('ano', 'like', "%{$search}%")
                      ->orWhere('sigla', 'like', "%{$search}%");
            })
            ->get();

        return view('turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('turma.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $turma = new Turma();
        $turma->nome = $request->nome;
        $turma->ano = $request->ano;
        $turma->sigla = $request->sigla;

        $turma->save();

        return redirect()->route('turma.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            return view('turma.show', compact(['turma']));
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            return view('turma.edit', compact('turma'));
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            $turma->nome = $request->nome;
            $turma->ano = $request->ano;
            $turma->sigla = $request->sigla;

             $turma->save();

            return redirect()->route('turma.index');
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $turma = Turma::find($id);
        if(isset($turma)){
            $turma->delete();
            return redirect()->route('turma.index');
        }

        return "<h1>ERRO: TURMA NÃO ENCONTRADA!</h1>";
    }
}
