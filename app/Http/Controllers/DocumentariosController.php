<?php

namespace App\Http\Controllers;

use App\Models\Documentario;
use Illuminate\Http\Request;

class DocumentariosController extends Controller
{
    public function index()
    {
        $documentarios = Documentario::all();         //pega todos os registros que tem na tab documentarios
        //dd($documentarios);       
        return view('documentarios.index',['documentarios'=>$documentarios]);
    }

    public function create()
    {
        return view('documentarios.create');
    }

    public function store(Request $request)
    {
        Documentario::create($request->all());
        return redirect()->route('documentarios-index');
    }

    public function edit($id)
    {
        $documentarios = Documentario::where('id',$id)->first();
        if(!empty($documentarios))
        {
            return view('documentarios.edit',['documentarios'=>$documentarios]);
        }
        else
        {
            return redirect()->route('documentarios-index');
        }
        
    }

    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
        ]; 
        Documentario::where('id',$id)->update($data);   //atualização no BD
        return redirect()->route('documentarios-index');
        
    }

    public function destroy($id)
    {
        Documentario::where('id',$id)->delete(); 
        return redirect()->route('documentarios-index');
    }

   

}

