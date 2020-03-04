<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Funcionario $funcionario)
    {
        $this->funcionario = $funcionario;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('painel');
    }

    public function contact(Funcionario $funcionario)
    {
        # Save all data of table 'funcionario' in $funcionarios
        $funcionarios = $funcionario->all();

        return view('contacts', compact('funcionarios'));
    }
}
