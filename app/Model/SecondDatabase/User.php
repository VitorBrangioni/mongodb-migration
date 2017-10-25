<?php

namespace App\Model\SecondDatabase;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent 
{
    protected $connection = 'secondDatabase';
    protected $collection = 'users';
    protected $primaryKey = '_id';

    protected $fillable = ['_id', 'email', 'password', 'name', 'role', 'picture', 'areas', 'notificacoes'];
}