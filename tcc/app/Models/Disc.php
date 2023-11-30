<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disc extends Model
{
    use HasFactory;
    protected $table = 'disciplinas'; //acessa a migration disciplinas

    public function conteudos(){
        return $this->hasMany(ListModel::class);//inner join com conteudo
    }
}
