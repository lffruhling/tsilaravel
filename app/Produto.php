<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    /*Tabela*/
    protected $table = 'produtos';

    /*Campos o controller tera acesso*/
    protected $fillable = [
        'nome',
        'quantidade',
        'preco'
    ];

    /*Campos que o controller nao tera acesso*/
    protected $guarded = [
        'id',
        'created_at',
        'update_at'
    ];
}
