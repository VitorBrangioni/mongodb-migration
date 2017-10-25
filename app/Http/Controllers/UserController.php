<?php

namespace App\Http\Controllers;

use App\Model\FirstDatabase\User as FirstUser;
use App\Model\SecondDatabase\User as SecondUser;


class UserController extends Controller
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

    public static function migrate()
    {
        $firstUsers = json_decode(FirstUser::all(), true);

        foreach ($firstUsers as $data) {
            $data['password'] = $data['hashed_password'];
            $data['areas'] = null;
            $data['notificacoes'] = null;
            
            SecondUser::create($data);
        }

        echo ' - migrate User Success';
    }

}
