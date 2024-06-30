<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyecto extends Model
{
    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'proyecto_id');
    }
    use HasFactory;
}
