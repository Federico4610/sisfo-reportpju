<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecentController extends Controller
{
    public function index()
    {
        $data = DB::table('tbl_pengaduan')
        ->join('tbl_masyarakat', function($join){
            $join->on('tbl_pengaduan.nik_id','=','tbl_masyarakat.nik');
        })->orderBy('id_pengaduan','DESC')->paginate(3);
        return view('masyarakat.recent',[
            'data'=>$data
        ]);
    }
}
