<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    use HasFactory;

    protected $table = 'rams';
    protected $primaryKey = 'id';
    protected $fillable = ['brand', 'name', 'type', 'capacity', 'speed', 'modules', 'price'];

    public function pc_parts()
    {
        return $this->hasMany(PcPart::class);
    }
}
