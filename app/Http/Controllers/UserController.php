<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($nama, $id){
        return view('user', ['nama' => $nama, 'no_telp' => $id]);
    }
}
