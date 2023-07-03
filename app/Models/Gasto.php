<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    use HasFactory;

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function pago()
    {
        return $this->belongsTo(Pago::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function perfile()
    {
        return $this->belongsTo(Perfile::class);
    }

    public function etiquetas()
    {
        return $this->belongsToMany(Etiqueta::class);
    }
}
