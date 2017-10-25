<?php

namespace App\Model\FirstDatabase;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Example extends Eloquent 
{
    protected $connection = 'firstDatabase';
    protected $collection = 'example';
    protected $primaryKey = '_id';
    protected $test;
}