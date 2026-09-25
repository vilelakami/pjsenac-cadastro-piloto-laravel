@extends('layouts.app')

@section('content')

    <h1>Cadastrar Piloto</h1>
    <form action="{{ route('piloto.store')}}" method="POST">
        @csrf

        <div>
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Ex: Kami Vilela" required>
        </div>
        <div>
            <label>Idade:</label>
            <input type="number" name="idade" required>
        </div>
        <div>
            <label>Sexo:</label>
            <select name="sexo" id="sexo">
                <option value="">Selecione uma opção</option>
                <option value="feminino">F</option>
                <option value="masculino">M</option>
                <option value="nenhum">Prefiro Não Informar</option>
                <option value="outros">Outros</option>
            </select>
        </div>
        <div>
            <label>Altura:</label>
            <input type="text" name="altura" placeholder="Ex: 1,60" required>
        </div>
        <div>
            <label>Peso:</label>
            <input type="text" name="peso" placeholder="Ex: 50,20" required>
        </div>
        <button type="submit">Cadastrar</button>
    </form>

@endsection