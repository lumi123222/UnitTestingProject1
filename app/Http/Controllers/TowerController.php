<?php

namespace App\Http\Controllers;

use App\Models\Tower;
use Illuminate\Http\Request;

class TowerController extends Controller
{
    public function index()
    {
        $towers = Tower::all();
        return view('towers.index')->with('towers',$towers);
    }

    public function create()
    {
        return view('towers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Tower::create($input);
        return redirect()->route('index.tower')->with('flash_message','TOWER Addedd!');
    }

    public function show(string $id)
    {
        $tower = Tower::find($id);
        return view('towers.show', ['towers' => $tower]);
    }

    public function edit(string $id)
    {
        $tower = Tower::find($id);
        return view('towers.edit')->with('towers', $tower);
    }

    public function update(Request $request, string $id)
    {
        $tower = Tower::find($id);
        $input = $request->all();
        $tower->update($input);
        return redirect()->route('index.tower')->with('flash_message', 'TOWER Updated!');
    }

    public function destroy(string $id)
    {
        Tower::destroy($id);
        return redirect()->route('index.tower')->with('flash_message', 'TOWER deleted!');
    }


}
