@extends('layouts.app')


@section('content')
    <!-- o que tem aqui é renderizado no tamplate !-->
    <div class="container">
        <h1>Editar Filme</h1>
        <hr>
        <form action="{{ route ('filmes-update',['id'=>$filmes->id]) }}" method="POST">
            @csrf      
            @method('PUT') 
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $filmes->nome }}" placeholder="Digite o Nome do Filme">
                </div>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $filmes->categoria }}" placeholder="Digite a Categoria do Filme">
                </div>
                <div class="form-group">                    
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>        
        </form>
    </div>
@endsection         