<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faturas extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'leitura','consumo_registado', 'valor_pagar', 'data_leitura', 'idusuario','contrato_id','multa'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
    
}
