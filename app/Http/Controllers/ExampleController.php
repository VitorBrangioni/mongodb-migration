<?php

namespace App\Http\Controllers;

use App\Example;

class ExampleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function Test()
    {
        $user = new Example();
        $user->test = 'Test ok HAHAHA';
        $user->save();
        return 'ok';
    }

    public function find()
    {
        return Example::all();
    }

    //
}
