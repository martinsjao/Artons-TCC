<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vests extends Model
{
    use HasFactory;
    protected $table = 'vestibulares'; //acessa a migration disciplinas
}
