<?php

namespace App\Http\Controllers;

use App\Models\Ram;
use Illuminate\Http\Request;

class RamController extends Controller
{
    public function index()
    {
        $rams = Ram::all();
        return view('rams.index')->with('rams',$rams);
    }

    public function create()
    {
        return view('rams.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Ram::create($input);
        return redirect()->route('index.ram')->with('flash_message','RAM Addedd!');
    }

    public function show(string $id)
    {
        $ram = Ram::find($id);
        return view('rams.show', ['rams' => $ram]);
    }

    public function edit(string $id)
    {
        $ram = Ram::find($id);
        return view('rams.edit')->with('rams', $ram);
    }

    public function update(Request $request, string $id)
    {
        $ram = Ram::find($id);
        $input = $request->all();
        $ram->update($input);
        return redirect()->route('index.ram')->with('flash_message', 'RAM Updated!');
    }

    public function destroy(string $id)
    {
        Ram::destroy($id);
        return redirect()->route('index.ram')->with('flash_message', 'RAM deleted!');
    }


}
