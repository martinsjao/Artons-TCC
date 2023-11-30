<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quests extends Model
{
    use HasFactory;

    protected $table = 'questoes';

    public function disciplina()
    {
        return $this->belongsTo(ListModel::class, 'cont_id');
    }

    
    public function alternativas(){
        return $this->hasMany(Alt::class);//inner join com questões
    }

}