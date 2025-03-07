<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WellcomeController extends Controller
{
    public function index(){
        $breadCrumb = (object) [
            'title' => 'selamat datang',
            'list' => ['Home', 'Welcome']
        ];

        $activeMenu = 'dashboard';
        return view('Welcome', ['breadcrumb' => $breadCrumb, 'activeMenu' => $activeMenu]);
    }
}
