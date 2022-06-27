@extends('layouts.app')


@section('content')
    <!-- o que tem aqui é renderizado no tamplate !-->
    <div class="container">
        <h1>Editar Documentário</h1>
        <hr>
        <form action="{{ route ('documentarios-update',['id'=>$documentarios->id]) }}" method="POST">
            @csrf      
            @method('PUT') 
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $documentarios->nome }}" placeholder="Digite o Nome do Documentário">
                </div>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $documentarios->categoria }}" placeholder="Digite a Categoria da Série">
                </div>
                <div class="form-group">                    
                    <input type="submit" name="submit" class="btn btn-success" value="Atualizar">
                </div>
            </div>        
        </form>
    </div>
@endsection         