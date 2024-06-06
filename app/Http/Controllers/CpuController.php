<?php

namespace App\Http\Controllers;

use App\Models\Cpu;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index()
    {
        $cpus = Cpu::all();
        return view('cpus.index')->with('cpus',$cpus);
    }

    public function create()
    {
        return view('cpus.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Cpu::create($input);
        return redirect()->route('index.cpu')->with('flash_message','CPU Addedd!');
    }

    public function show(string $id)
    {
        $cpu = Cpu::find($id);
        return view('cpus.show', ['cpus' => $cpu]);
    }

    public function edit(string $id)
    {
        $cpu = Cpu::find($id);
        return view('cpus.edit')->with('cpus', $cpu);
    }

    public function update(Request $request, string $id)
    {
        $cpu = Cpu::find($id);
        $input = $request->all();
        $cpu->update($input);
        return redirect()->route('index.cpu')->with('flash_message', 'CPU Updated!');
    }

    public function destroy(string $id)
    {
        Cpu::destroy($id);
        return redirect()->route('index.cpu')->with('flash_message', 'CPU deleted!');
    }


}
