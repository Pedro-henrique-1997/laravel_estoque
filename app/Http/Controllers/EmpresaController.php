<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class EmpresaController extends Controller
{

    public $emp;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->emp = new Empresa();
    }

    public function index()
    {
        $lista_emp = $this->emp->paginate(3);
        return view('empresa\index', compact('lista_emp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa\create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inserir_emp = $this->emp->create([
            'nome'=>$request->nome,
            'estado'=>$request->estado,
            'fornecimento'=>$request->fornecimento,
            'orcamento'=>$request->orcamento,
        ]);

         if($inserir_emp){
                return redirect('empresa');
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
        $visualizar_emp = $this->emp->find($id);
        return view('empresa\show', compact('visualizar_emp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dados_emp = $this->emp->find($id);
        return view('empresa\edit', compact('dados_emp'));
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
        $this->emp->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'estado'=>$request->estado,
            'fornecimento'=>$request->fornecimento,
            'orcamento'=>$request->orcamento,
        ]);

        return redirect('empresa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $del = $this->emp->destroy($id);
        return($del)?"sim":"nao";
    }
}
