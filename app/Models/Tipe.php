<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function kartografi()
    {
        return $this->hasMany(Kartografi::class);
    }
}
