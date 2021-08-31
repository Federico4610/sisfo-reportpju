<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('tbl_stok_lampu')
        ->where('nama_lampu','like',"%{$request->keyword}%")
        ->orWhere('tipe_lampu','like',"%{$request->keyword}%")
        ->orWhere('jumlah','like',"%{$request->keyword}%")
        ->orWhere('tgl_masuk','like',"%{$request->keyword}%")
        ->paginate(5);
        return view('admin/stok.index',['data'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/stok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tbl_stok_lampu')->insert([
            'nama_lampu'=>$request->nama_lampu,
            'tipe_lampu'=>$request->tipe_lampu,
            'jumlah'=>$request->jumlah,
            'tgl_masuk'=>$request->tgl_masuk
        ]);
        return redirect('stok')->with('message','Berhasil ditambahkan');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('tbl_stok_lampu')->where('id_stok_lampu',$id)->first();
        return view('admin/stok.edit',['data'=>$data]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('tbl_stok_lampu')->where('id_stok_lampu',$id)->update([
            'nama_lampu'=>$request->nama_lampu,
            'tipe_lampu'=>$request->tipe_lampu,
            'jumlah'=>$request->jumlah,
            'tgl_masuk'=>$request->tgl_masuk
        ]);
        return redirect('stok')->with('message','Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_stok_lampu')->where('id_stok_lampu',$id)->delete();
        return redirect()->back()->with('message','Berhasil dihapus');
    }
}
