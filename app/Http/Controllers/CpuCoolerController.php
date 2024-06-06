<?php

namespace App\Http\Controllers;

use App\Models\CpuCooler;
use Illuminate\Http\Request;

class CpuCoolerController extends Controller
{
    public function index()
    {
        $cpu_coolers = CpuCooler::all();
        return view('cpu_coolers.index')->with('cpu_coolers',$cpu_coolers);
    }

    public function create()
    {
        return view('cpu_coolers.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        CpuCooler::create($input);
        return redirect()->route('index.cpu_cooler')->with('flash_message','CPU COOLER Addedd!');
    }

    public function show(string $id)
    {
        $cpu_cooler = CpuCooler::find($id);
        return view('cpu_coolers.show', ['cpu_coolers' => $cpu_cooler]);
    }

    public function edit(string $id)
    {
        $cpu_cooler = CpuCooler::find($id);
        return view('cpu_coolers.edit')->with('cpu_coolers', $cpu_cooler);
    }

    public function update(Request $request, string $id)
    {
        $cpu_cooler = CpuCooler::find($id);
        $input = $request->all();
        $cpu_cooler->update($input);
        return redirect()->route('index.cpu_cooler')->with('flash_message', 'CPU COOLER Updated!');
    }

    public function destroy(string $id)
    {
        CpuCooler::destroy($id);
        return redirect()->route('index.cpu_cooler')->with('flash_message', 'CPU COOLER deleted!');
    }


}
