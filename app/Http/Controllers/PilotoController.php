<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Piloto;

class PilotoController extends Controller
{
    public function store(Request $req){
        $data = $req->validate([
            'nome' => ['required', 'string', 'max:255'],
            'idade' => ['required', 'int'],
            'sexo' => ['required', 'string', 'max:255'],
            'altura' => ['required', 'string', 'max:6'],
            'peso' => ['required', 'string', 'max:6'],
        ]);

        $piloto = Piloto::create($data);

        return redirect()->route('pilotos.index', $piloto);
    }

    public function create(){
        return view('pilotos.create');
    }

    public function edit(Piloto $piloto){
        return view('pilotos.edit', [
            'piloto' => $piloto
        ]);
    }

    public function update(Piloto $piloto, Request $req){
        $data = $req->validate([
            'nome' => ['required', 'string', 'max:255'],
            'idade' => ['required', 'int'],
            'sexo' => ['required', 'string', 'max:255'],
            'altura' => ['required', 'string', 'max:6'],
            'peso' => ['required', 'string', 'max:6'],
        ]);

        $piloto->update($data);

        return redirect()->route('pilotos.index');
    }

    public function index(){
        $pilotos = Piloto::all();

        return view('pilotos.index', [
            'pilotos' => $pilotos
        ]);
    }

    public function destroy(Piloto $piloto){
        $piloto->delete();

        return redirect()->route('pilotos.index');
    }
}
