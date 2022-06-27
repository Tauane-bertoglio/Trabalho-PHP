<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();         //pega todos os registros que tem na tab Series
        //dd($series);       
        return view('series.index',['series'=>$series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        Serie::create($request->all());
        return redirect()->route('series-index');
    }

    public function edit($id)
    {
        $series = Serie::where('id',$id)->first();
        if(!empty($series))
        {
            return view('series.edit',['series'=>$series]);
        }
        else
        {
            return redirect()->route('series-index');
        }
        
    }

    public function update(Request $request, $id)
    {

        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
        ]; 
        Serie::where('id',$id)->update($data);   //atualização no BD
        return redirect()->route('series-index');
        
    }

    public function destroy($id)
    {
        Serie::where('id',$id)->delete(); 
        return redirect()->route('series-index');
    }

   

}
