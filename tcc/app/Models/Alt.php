<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alt extends Model
{
    use HasFactory;
    protected $table = 'alternativas';

    public function conteudo()
    {
        return $this->belongsTo(Quests::class, 'quest_id');
    }
}
