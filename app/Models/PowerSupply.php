<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerSupply extends Model
{
    use HasFactory;
    protected $table = 'power_supplies';
    protected $primaryKey = 'id';
    protected $fillable = ['brand', 'name', 'wattage', 'efficiency_rating', 'modularity', 'fan_size', 'price'];

    public function pc_parts()
    {
        return $this->hasMany(PcPart::class);
    }
}
