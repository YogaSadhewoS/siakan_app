<?php

namespace App\Models;

use App\Models\Tipe;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kearsitekturan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded =['id'];

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}
