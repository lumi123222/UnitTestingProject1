<?php

namespace App\Http\Controllers;

use App\Models\Gpu;
use Illuminate\Http\Request;

class GpuController extends Controller
{
    public function index()
    {
        $gpus = Gpu::all();
        return view('gpus.index')->with('gpus',$gpus);
    }

    public function create()
    {
        return view('gpus.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Gpu::create($input);
        return redirect()->route('index.gpu')->with('flash_message','GPU Addedd!');
    }

    public function show(string $id)
    {
        $gpu = Gpu::find($id);
        return view('gpus.show', ['gpus' => $gpu]);
    }

    public function edit(string $id)
    {
        $gpu = Gpu::find($id);
        return view('gpus.edit')->with('gpus', $gpu);
    }

    public function update(Request $request, string $id)
    {
        $gpu = Gpu::find($id);
        $input = $request->all();
        $gpu->update($input);
        return redirect()->route('index.gpu')->with('flash_message', 'GPU Updated!');
    }

    public function destroy(string $id)
    {
        Gpu::destroy($id);
        return redirect()->route('index.gpu')->with('flash_message', 'GPU deleted!');
    }


}
