<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\sub_category;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function MonCompte()
    {

        $user = auth()->user();

        if ($user instanceof User) {
            $user->load(['address' => function ($query) {
                $query->select('address.*');
            }]);
        }
        dd($user);
//        return view('account', compact('user'));

    }

}
