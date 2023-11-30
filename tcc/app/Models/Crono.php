<?php

namespace App\Models;

use App\Http\Controllers\listController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crono extends Model
{
    use HasFactory;
    protected $table = 'semanas';
    protected $primaryKey = 'pk_cod_semana'; // Corrigido o nome da chave primária

    public function login()
    {
        return $this->belongsTo(User::class, 'login_id');
    }

    public function cont_crono(){
        return $this->hasMany(Crono_Cont::class, 'semana_id');
    }
}
