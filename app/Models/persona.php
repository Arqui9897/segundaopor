<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    protected $table= 'persona';
    public $timestamps =false;
    public $fillable = ['npersona','apersona','cpersona','epersona','id_sintomas','id_especialidad','id_tipopersona'];

}
