<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cpu;

class PcPart extends Model
{
    use HasFactory;

    //protected $table = 'pc_parts';
    protected $fillable = ['cpus_id', 'gpus_id', 'rams_id', 'power_supplies_id', 'cpu_coolers_id', 'towers_id', 'storages_id' ,'motherboards_id', 'user_id'];

    public function cpus()
    {
        return $this->belongsTo(Cpu::class);
    }

    public function gpus()
    {
        return $this->belongsTo(Gpu::class);
    }
    public function rams()
    {
        return $this->belongsTo(Ram::class);
    }
    public function power_supplies()
    {
        return $this->belongsTo(PowerSupply::class);
    }
    public function cpu_coolers()
    {
        return $this->belongsTo(CpuCooler::class);
    }
    public function towers()
    {
        return $this->belongsTo(Tower::class);
    }
    public function storages()
    {
        return $this->belongsTo(Storage::class);
    }
    public function motherboards()
    {
        return $this->belongsTo(Motherboard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
