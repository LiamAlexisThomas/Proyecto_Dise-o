<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    public function proyectos()
    {
        return $this->hasMany(proyecto::class, 'material_id');
    }
    use HasFactory;
}
