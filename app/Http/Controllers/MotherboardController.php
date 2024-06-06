<?php

namespace App\Http\Controllers;

use App\Models\Motherboard;
use Illuminate\Http\Request;

class MotherboardController extends Controller
{
    public function index()
    {
        $motherboards = Motherboard::all();
        return view('motherboards.index')->with('motherboards',$motherboards);
    }

    public function create()
    {
        return view('motherboards.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Motherboard::create($input);
        return redirect()->route('index.motherboard')->with('flash_message','MOTHERBOARD Addedd!');
    }

    public function show(string $id)
    {
        $motherboard = Motherboard::find($id);
        return view('motherboards.show', ['motherboards' => $motherboard]);
    }

    public function edit(string $id)
    {
        $motherboard = Motherboard::find($id);
        return view('motherboards.edit')->with('motherboards', $motherboard);
    }

    public function update(Request $request, string $id)
    {
        $motherboard = Motherboard::find($id);
        $input = $request->all();
        $motherboard->update($input);
        return redirect()->route('index.motherboard')->with('flash_message', 'MOTHERBOARD Updated!');
    }

    public function destroy(string $id)
    {
        Motherboard::destroy($id);
        return redirect()->route('index.motherboard')->with('flash_message', 'MOTHERBOARD deleted!');
    }


}
