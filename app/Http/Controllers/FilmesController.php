<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index()
    {
        $filmes = Filme::all();         //pega todos os registros que tem na tab filmes
        //dd($filmes);       
        return view('filmes.index',['filmes'=>$filmes]);
    }

    public function create()
    {
        return view('filmes.create');
    }

    public function store(Request $request)
    {
        Filme::create($request->all());
        return redirect()->route('filmes-index');
    }

    public function edit($id)
    {
        $filmes = Filme::where('id',$id)->first();
        if(!empty($filmes))
        {
            return view('filmes.edit',['filmes'=>$filmes]);
        }
        else
        {
            return redirect()->route('filmes-index');
        }
        
    }

    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
        ]; 
        Filme::where('id',$id)->update($data);   //atualização no BD
        return redirect()->route('filmes-index');
        
    }

    public function destroy($id)
    {
        Filme::where('id',$id)->delete(); 
        return redirect()->route('filmes-index');
    }

   

}

