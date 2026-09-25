@extends('layouts.app')

@section('content')

    <h1>Todos os Pilotos Cadastrados</h1>

    @foreach($pilotos as $piloto)
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ $piloto->nome }}" readonly>
        </div>
        <div>
            <label>Idade:</label>
            <input type="number" name="idade" value="{{ $piloto->idade }}" readonly>
        </div>
        <div>
            <label>Sexo:</label>
            <input type="text" name="sexo" value="{{ $piloto->sexo }}" readonly>
        </div>
        <div>
            <label>Altura:</label>
            <input type="text" name="altura" value="{{ $piloto->altura }}" readonly>
        </div>
        <div>
            <label>Peso:</label>
            <input type="text" name="peso" value="{{ $piloto->peso }}" readonly>
        </div>
        <button><a href="/piloto/{piloto}/edit">Editar Informações</a></button>
        <form action="{{ route('piloto.delete', $piloto)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="SUBMIT">Deletar Piloto</button>
        </form>

    @endforeach
    @if($pilotos->isEmpty())
        <p>Nenhum piloto cadastrado</p>
    @endif
    
    <button><a href="/piloto/create">Cadastrar Piloto</a></button>

@endsection