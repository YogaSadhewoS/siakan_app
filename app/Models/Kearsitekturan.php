<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kearsitekturan extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}
