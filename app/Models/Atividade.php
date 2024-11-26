<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    use HasFactory;

    protected $fillable = ['cultura_id', 'area_id', 'insumo_id', 'descricao', 'data_hora'];

    public function cultura()
    {
        return $this->belongsTo(Cultura::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function insumo()
    {
        return $this->belongsTo(Insumo::class);
    }
}
