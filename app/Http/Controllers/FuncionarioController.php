<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quarto;
use App\User;
use App\Funcionario;

class FuncionarioController extends Controller
{
    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Funcionario $funcionario)
    {
        # Save all data of table 'funcionario' in $funcionarios
        $funcionarios = $funcionario->all();

        # Count how many users are in the database
        $qtdfuncionarios = $funcionarios->filter(function ($funcionario) {
            return $funcionario->id;
        })->count();


        return view('controlefuncionarios', compact('funcionarios', 'qtdfuncionarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('funcionarioadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except(['_token', 'acesso', 'isAdmin']);

        $insert = $this->funcionario->create($dataForm);

        if ($insert) {
            return redirect()->route('painel');
        } else {
            return redirect()->route('controlfuncionarios')->with(['errros' => 'Falha ao Editar']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $funcionario = $this->funcionario->find($id);

        return view('funcionariodelete', compact('funcionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcionario = $this->funcionario->find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Collect all data from From
        $dataForm = $request->all();

        $funcionario = $this->funcionario->find($id);

        $update = $funcionario->update($dataForm);

        if ($update) {
            return redirect()->route('painel');
        } else {
            return redirect()->route('controlfuncionarios')->with(['errros' => 'Falha ao Editar']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcionario = $this->funcionario->find($id);

        $delete = $funcionario->delete();

        if ($delete) {
            return redirect()->route('painel');
        } else {
            return redirect()->route('controlfuncionarios')->with(['errros' => 'Falha ao Editar']);
        }
    }
}
