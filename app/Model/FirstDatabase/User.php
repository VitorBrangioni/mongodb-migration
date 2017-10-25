<?php

namespace App\Model\FirstDatabase;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class User extends Eloquent 
{
    protected $connection = 'firstDatabase';
    protected $collection = 'users';
    protected $primaryKey = '_id';

}