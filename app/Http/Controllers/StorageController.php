<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index()
    {
        $storages = Storage::all();
        return view('storages.index')->with('storages',$storages);
    }

    public function create()
    {
        return view('storages.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Storage::create($input);
        return redirect()->route('index.storage')->with('flash_message','STORAGE Addedd!');
    }

    public function show(string $id)
    {
        $storage = Storage::find($id);
        return view('storages.show', ['storages' => $storage]);
    }

    public function edit(string $id)
    {
        $storage = Storage::find($id);
        return view('storages.edit')->with('storages', $storage);
    }

    public function update(Request $request, string $id)
    {
        $storage = Storage::find($id);
        $input = $request->all();
        $storage->update($input);
        return redirect()->route('index.storage')->with('flash_message', 'STORAGE Updated!');
    }

    public function destroy(string $id)
    {
        Storage::destroy($id);
        return redirect()->route('index.storage')->with('flash_message', 'STORAGE deleted!');
    }


}
