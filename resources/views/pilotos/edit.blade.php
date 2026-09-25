@extends('layouts.app')

@section('content')

    <h1>Editar Piloto</h1>
    <form action="{{ route('piloto.update', $piloto)}}" method="POST">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Ex: Kami Vilela" value="{{$piloto->nome}}" required>
        </div>
        <div>
            <label>Idade:</label>
            <input type="number" name="idade" value="{{$piloto->idade}}" required>
        </div>
        <div>
            <label>Sexo:</label>
            <select name="sexo" id="sexo" value="{{$piloto->sexo}}" required>
                <option value="">Selecione uma opção</option>
                <option value="feminino">F</option>
                <option value="masculino">M</option>
                <option value="nenhum">Prefiro Não Informar</option>
                <option value="outros">Outros</option>
            </select>
        </div>
        <div>
            <label>Altura:</label>
            <input type="text" name="altura" placeholder="Ex: 1,60" value="{{$piloto->altura}}" required>
        </div>
        <div>
            <label>Peso:</label>
            <input type="text" name="peso" placeholder="Ex: 50,20" value="{{$piloto->peso}}" required>
        </div>
        <button type="submit">Atualizar</button>
    </form>

@endsection