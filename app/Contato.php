<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /**
     * Fillable fields
     * @var array
     */
    protected $fillable = [ 'nome', 'telefone', 'email' ];
}
