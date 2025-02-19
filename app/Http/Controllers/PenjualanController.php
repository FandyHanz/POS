<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function foodBeverage(){
        return 'adalah bagian dari food and beverages';
    }
    public function beautyHealth(){
        return 'adalah bagian beauty an health';
    }
    public function homecare(){
        return 'adalah bagian dari home care';
    }
    public function babyKid(){
        return 'adalah bagian dari baby kid';
    }
}
