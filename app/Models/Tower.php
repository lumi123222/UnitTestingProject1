<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tower extends Model
{
    use HasFactory;

    protected $table = 'towers';
    protected $primaryKey = 'id';
    protected $fillable = ['brand', 'name', 'type', 'color', 'material', 'dimensions' , 'price'];


    public function pc_parts()
    {
        return $this->hasMany(PcPart::class);
    }
}
