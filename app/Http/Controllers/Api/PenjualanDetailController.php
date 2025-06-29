<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PenjualanDetailModel;
use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    public function show()
    {
        $detail = PenjualanDetailModel::with('barang') ->get();
        $result = $detail->map(function ($detail){
            return[
                'barang_id'=> $detail->barang_id,
                'barang_nama'=>$detail->barang->barang_nama,
                'image'=>$detail->barang->image
            ];
        });
        return response()->json($result);
    }
}

