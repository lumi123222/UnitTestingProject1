<?php

namespace App\Http\Controllers;


use App\Models\Tower;
use App\Models\Cpu;
use App\Models\CpuCooler;
use App\Models\Gpu;
use App\Models\Motherboard;
use App\Models\PcPart;
use App\Models\PowerSupply;
use App\Models\Ram;
use App\Models\Storage;
use App\Models\User;
use Illuminate\Http\Request;

class PcPartController extends Controller
{

    public function contact(){
        return view('home');
    }

    public function index()
    {
        if (auth()->user()->is_admin) {
            $pc_parts = PcPart::with(['cpus', 'gpus', 'rams', 'power_supplies', 'cpu_coolers', 'towers', 'storages', 'motherboards'])->get();
        } else {
            $pc_parts = auth()->user()->pcBuilds;
        }
        return view('pc_parts.index', compact('pc_parts'));

    }

    /*public function create()
    {
        $cpus = Cpu::all();
        $gpus = Gpu::all();
        $rams = Ram::all();
        $power_supplies = PowerSupply::all();
        $cpu_coolers = CpuCooler::all();
        $towers = Tower::all();
        $storages= Storage::all();
        $motherboards = Motherboard::all();

        return view('pc_parts.create', compact('cpus', 'gpus', 'rams', 'power_supplies','cpu_coolers','towers','storages', 'motherboards'));
    }*/

    /* public function create(Request $request)
     {
     $pc_part = new PcPart();
     $pc_part->cpus_id = $request->cpus_id;
     $pc_part->gpus_id = $request->gpus_id;
     $pc_part->rams_id = $request->rams_id;
     $pc_part->power_supplies_id = $request->power_supplies_id;
     $pc_part->cpu_coolers_id = $request->cpu_coolers_id;
     $pc_part->towers_id = $request->towers_id;
     $pc_part->storages_id = $request->storages_id;
     $pc_part->motherboards_id = $request->motherboards_id;
     $pc_part->save();

     PcPart::create([
         'cpus_id' => $pc_part->cpus_id,
         'gpus_id' => $pc_part->gpus_id,
         'rams_id' => $pc_part->rams_id,
         'power_supplies_id' => $pc_part->power_supplies_id,
         'cpu_coolers_id' => $pc_part->cpu_coolers_id,
         'towers_id' => $pc_part->towers_id,
         'storages_id' => $pc_part->storages_id,
         'motherboards_id' => $pc_part->motherboards_id,
     ]);
 }*/

    public function create()
    {
        $cpus = Cpu::all();
        $gpus = Gpu::all();
        $rams = Ram::all();
        $power_supplies = PowerSupply::all();
        $cpu_coolers = CpuCooler::all();
        $towers = Tower::all();
        $storages = Storage::all();
        $motherboards = Motherboard::all();

        return view('pc_parts.create', compact('cpus', 'gpus', 'rams', 'power_supplies', 'cpu_coolers', 'towers', 'storages', 'motherboards'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cpus_id' => 'required',
            'gpus_id' => 'required',
            'rams_id' => 'required',
            'power_supplies_id' => 'required',
            'cpu_coolers_id' => 'required',
            'towers_id' => 'required',
            'storages_id' => 'required',
            'motherboards_id' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $pc_part = PcPart::create($validatedData);

        return redirect('pc_part')->with('success', 'PC Part added successfully!');
    }

    /*
    public function store(Request $request)
    {
        $input = $request->all();
        PcPart::create($input);
        return redirect('pc_part')->with('flash_message','PC Part added successfully!');
    }*/
    public function show($id)
    {
        $pc_part = PcPart::findOrFail($id);

        if($pc_part->user_id !== auth()->id() && !auth()->user()->is_admin ){
            abort(403,'Unauthorized action.');
        }

        $cpus = Cpu::all();
        $gpus = Gpu::all();
        $rams = Ram::all();
        $power_supplies = PowerSupply::all();
        $cpu_coolers = CpuCooler::all();
        $towers = Tower::all();
        $storages = Storage::all();
        $motherboards = Motherboard::all();


        return view('pc_parts.show', compact('pc_part', 'cpus', 'gpus', 'rams', 'power_supplies', 'cpu_coolers', 'towers', 'storages', 'motherboards'));

    }

    public function edit($id)
    {
        $pc_part = PcPart::findOrFail($id);
        $cpus = Cpu::all();
        $gpus = Gpu::all();
        $rams = Ram::all();
        $power_supplies = PowerSupply::all();
        $cpu_coolers = CpuCooler::all();
        $towers = Tower::all();
        $storages = Storage::all();
        $motherboards = Motherboard::all();

        return view('pc_parts.edit', compact('pc_part', 'cpus', 'gpus', 'rams', 'power_supplies', 'cpu_coolers', 'towers', 'storages', 'motherboards'));
    }

    public function update(Request $request, $id)
    {
        $pc_part = PcPart::findOrFail($id);

        $pc_part->cpus_id = $request->cpus_id;
        $pc_part->gpus_id = $request->gpus_id;
        $pc_part->rams_id = $request->rams_id;
        $pc_part->power_supplies_id = $request->power_supplies_id;
        $pc_part->cpu_coolers_id = $request->cpu_coolers_id;
        $pc_part->towers_id = $request->towers_id;
        $pc_part->storages_id = $request->storages_id;
        $pc_part->motherboards_id = $request->motherboards_id;

        $pc_part->update();

        return redirect('pc_part')->with('success', 'PC updated successfully!');
    }

    public function destroy($id)
    {
        $pc_part = PcPart::findOrFail($id);
        $pc_part->delete();

        return redirect('pc_part')->with('success', 'PC Part deleted successfully!');
    }

    public function adminView()
    {
        $pc_parts = PcPart::with('user')->get(); // get all PC parts with associated user information
        return view('view', compact('pc_parts'));
    }


}
