<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    //lidar com remoções suaveis
    use SoftDeletes;

    protected $table = 'fornecedores';
    protected $fillable = ['nome','uf','email'];

}
