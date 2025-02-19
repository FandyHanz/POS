<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart($user, $item){
        return view('cart', ['username'=> $user, 'item' => $item ]);
    }
}
