<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Construction extends Authenticatable 
{
    protected $fillable = ['nom', 'prenom', 'username', 'password', 'repetezMotDePasse'];
}
