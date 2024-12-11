<?php

namespace App\Models;

use App\Models\Seccion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;
    protected $table = 'noticias';

    protected $fillable = [
        'foto',
        'seccion_id',
        'autor',
        'fecha',
        'titulo',
        'bajada',
        'nota',
        'usuario',
    ];
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }
}
