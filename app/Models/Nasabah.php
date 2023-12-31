<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function hadiah()
    {
        return $this->belongsTo(Hadiah::class);
    }
    public function wilayah()
    {
        return $this->belongsTo(Wilayah::class);
    }
}
