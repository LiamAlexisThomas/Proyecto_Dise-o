<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class diseñador extends Model
{
    public function contratos()
    {
        return $this->hasMany(contrato::class, 'diseñador_id');
    }
    use HasFactory;
}
