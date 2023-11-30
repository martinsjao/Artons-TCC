<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    use HasFactory;
    protected $table = 'conteudos';

    protected $primaryKey = 'pk_cod_cont';

    public function cont_crono(){
        return $this->hasMany(Crono_cont::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disc::class,'disc_id');
    }


    public function conteudos(){
        return $this->hasMany(Quests::class);//inner join com questões
    }
}
