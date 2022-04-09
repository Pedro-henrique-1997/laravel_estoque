<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProduto;
use App\User;

class ProdutoController extends Controller
{
    public $pro;
    public $user;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->pro = new ModelProduto();
        $this->user = new User();
    }


    public function index()
    {
        $prod = $this->pro->paginate(4);
        return view('index', compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=$this->user->all();
        return view('create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad_pro = $this->pro->create([
            'nome'=>$request->nome,
            'id_user'=>$request->id_user,
            'quantidade'=>$request->quantidade,
            'preco'=>$request->preco,
            'categoria'=>$request->categoria,
        ]);

        if($cad_pro){
            return redirect('produtos');
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
        $prod = $this->pro->find($id);
        return view('show', compact('prod'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = $this->pro->find($id);
        $users = $this->user->all();
        return view('editar',compact('prod', 'users'));
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
        $this->pro->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'id_user'=>$request->id_user,
            'quantidade'=>$request->quantidade,
            'preco'=>$request->preco,
            'categoria'=>$request->categoria,
        ]);

        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = $this->pro->destroy($id);
        return($del)?"sim":"nao";
    }
}
