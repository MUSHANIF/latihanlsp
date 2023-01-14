<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jnslayanan extends Model
{
    use HasFactory;
    public function jns()
    {
        return $this->hasMany(layanan::class, 'jnsid', 'id');
    }
}
