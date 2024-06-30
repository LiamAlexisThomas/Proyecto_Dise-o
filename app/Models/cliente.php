<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'cliente_id');
    }
    use HasFactory;
}
