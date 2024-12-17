<?php

namespace App\Http\Controllers;

use App\Models\NkpNhaCC;
use Illuminate\Http\Request;

class NkpNhaCCController extends Controller
{
    // list / create / edit / delete
    public function list(){

        // Lấy dữ liệu từ DB thông qua ORM 
        $nkpNhaCCs = NkpNhaCC::all();
        return view('NkpNhaCC.list',['nkpNhaCCs'=>$nkpNhaCCs]);
    }
}
