<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crono_Cont extends Model
{
    use HasFactory;
    protected $table = 'crono_cont';


    public function conteudo()
    {
        return $this->belongsTo(ListModel::class, 'cont_id');
    }

    public function semana()
    {
        return $this->belongsTo(Crono::class, 'semana_id');
    }
}
