<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class LaporanController extends Controller
{
    public function rekap(Request $request)
    {
        $ke = $request->ke; $dari = $request->dari;

        $data = DB::table('tbl_pengaduan')
        ->join('tbl_masyarakat','tbl_pengaduan.nik_id','=','tbl_masyarakat.nik')
        ->whereBetween('tbl_pengaduan.tanggal_pengaduan',[$dari,$ke])
        // ->join('tbl_tanggapan','tbl_tanggapan.pengaduan_id','=','tbl_pengaduan.id_pengaduan')
        ->get();

        // ->where('id_pengaduan','like',"%{$request->keyword}%")
        // ->orWhere('nama','like',"%{$request->keyword}%")
        // ->where('tanggal_pengaduan','like',"%{$request->keyword}%")
        // ->orWhere('isi_laporan','like',"%{$request->keyword}%")
        // ->when($request->dari,function ($query) use ($request) {
        //     $dari = $request->dari;
        //     $ke = $request->ke;   
        //         $query
        //     ->whereBetween('tanggal_pengaduan',[$dari,$ke]);
        //     })->paginate($request->limit ?  $request->limit : 10);

        // // query total pengaduan
        // $totalpengaduan = DB::table('tbl_pengaduan')
        // ->when($request->dari,function ($query) use ($request) {
        // $dari = $request->dari;
        // $ke = $request->ke;   
        //     $query
        // ->whereBetween('tanggal_pengaduan',[$dari,$ke]);
        // })->paginate($request->limit ?  $request->limit : 10);
        // $totalpengaduan->appends($request->only('dari','ke'));

        // // query total tanggapan
        // $totaltanggapan = DB::table('tbl_tanggapan')
        // ->when($request->dari,function ($query) use ($request) {
        // $dari = $request->dari;
        // $ke = $request->ke;   
        //     $query
        // ->whereBetween('tgl_tanggapan',[$dari,$ke]);
        // })->paginate($request->limit ?  $request->limit : 10);
        // $totaltanggapan->appends($request->only('dari','ke'));

        // // query total pengaduan terkirim
        // $totalterkirim = DB::table('tbl_pengaduan')
        // ->when($request->dari,function ($query) use ($request) {
        // $dari = $request->dari;
        // $ke = $request->ke;   
        //     $query
        // ->whereBetween('tanggal_pengaduan',[$dari,$ke]);
        // })->where('status','terkirim')->paginate($request->limit ?  $request->limit : 10);
        // $totalpengaduan->appends($request->only('dari','ke'));

        // // query total pengaduan proses
        // $totalproses = DB::table('tbl_pengaduan')
        // ->when($request->dari,function ($query) use ($request) {
        // $dari = $request->dari;
        // $ke = $request->ke;   
        //     $query
        // ->whereBetween('tanggal_pengaduan',[$dari,$ke]);
        // })->where('status','proses')->paginate($request->limit ?  $request->limit : 10);
        // $totalpengaduan->appends($request->only('dari','ke'));

        // // query total pengaduan selesai
        // $totalselesai = DB::table('tbl_pengaduan')
        // ->when($request->dari,function ($query) use ($request) {
        // $dari = $request->dari;
        // $ke = $request->ke;   
        //     $query
        // ->whereBetween('tanggal_pengaduan',[$dari,$ke]);
        // })->where('status','selesai')->paginate($request->limit ?  $request->limit : 10);
        // $totalpengaduan->appends($request->only('dari','ke'));

        // // menghitung total pengaduan
        // $hitungtp = $totalpengaduan->count();

        // // menghitung total tanggapan
        // $hitungtg = $totaltanggapan->count();

        // // menghitung total terkirm
        // $terkirim = $totalterkirim->count();

        // // menghitung total proses
        // $proses = $totalproses->count();

        // // menghitung total selesai
        // $selesai = $totalselesai->count();

        // // menghitung masyarakat
        // $masyarakat = DB::table('tbl_masyarakat')->count();

        // // menghitung petugas
        // $petugas = DB::table('tbl_petugas')->count();

        // tanggal
        // dd($dari);
    
        // // return view('admin/laporan.pdf',[
        // //     'hitungtp'=>$hitungtp,
        // //     'hitungtg'=>$hitungtg,
        // //     'terkirim'=>$terkirim,
        // //     'proses'=>$proses,
        // //     'selesai'=>$selesai,
        // //     'masyarakat'=>$masyarakat,
        // //     'petugas'=>$petugas,
        // //     'ke'=>$ke,'dari'=>$dari
        // // ]);

        // $pdf = PDF::loadview('admin/laporan.pdf',[
        //     'hitungtp'=>$hitungtp,
        //     'hitungtg'=>$hitungtg,
        //     'terkirim'=>$terkirim,
        //     'proses'=>$proses,
        //     'selesai'=>$selesai,
        //     'masyarakat'=>$masyarakat,
        //     'petugas'=>$petugas,
        //     'ke'=>$ke,'dari'=>$dari
        // ]);

        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadview('/admin/laporan/pdf' , [
            'data'=>$data,
            'ke'=>$ke,'dari'=>$dari
            ])->setPaper('a4', 'landscape');
        return $pdf->stream('pengaduan-pdf');
    }
}
