<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
    use HasFactory;
    protected $table = 'storages';
    protected $primaryKey = 'id';
    protected $fillable = ['brand', 'name', 'type', 'capacity', 'interface', 'form_factor','read_speed', 'write_speed', 'price'];

    public function pc_parts()
    {
        return $this->hasMany(PcPart::class);
    }
}
