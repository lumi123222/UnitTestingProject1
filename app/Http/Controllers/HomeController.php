<?php

namespace App\Http\Controllers;

use App\Models\PcPart;
use App\Models\Cpu;
use App\Models\CpuCooler;
use App\Models\Gpu;
use App\Models\Motherboard;
use App\Models\PowerSupply;
use App\Models\Ram;
use App\Models\Storage;
use App\Models\Tower;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function contact($id)
    {
        $pc_part=PcPart::findOrFail($id);
        $cpus = Cpu::all();
        $gpus = Gpu::all();
        $rams = Ram::all();
        $power_supplies = PowerSupply::all();
        $cpu_coolers = CpuCooler::all();
        $towers = Tower::all();
        $storages = Storage::all();
        $motherboards = Motherboard::all();
        return view('contactpage', compact('pc_part', 'cpus', 'gpus', 'rams', 'power_supplies', 'cpu_coolers', 'towers', 'storages', 'motherboards'));
    }

    public function buy($id)
    {
        $pc_part=PcPart::findOrFail($id);
        $pc_part->delete();
        return view('buypage');
    }

    public function adminHome(){
        return view('admin-home');
    }


}
