<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $name = 'Steva';
        $niz = array(
            'name' => 'Stevan',
            'prezime' => 'Draskovic',
            'email' => 'drasko121@gmail.com'
        );
        return view('user', ['name' => $name, 'niz' => $niz]);
    }

    public function zahtevi(Request $request)
    {
        return $request->fullUrl();
    }
}
