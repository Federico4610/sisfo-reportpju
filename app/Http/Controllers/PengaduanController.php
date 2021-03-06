<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
class PengaduanController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('tbl_pengaduan')
        ->join('tbl_masyarakat', function($join){
            $join->on('tbl_pengaduan.nik_id','=','tbl_masyarakat.nik');
        })
        ->where('nik','like',"%{$request->keyword}%")
        ->orWhere('isi_laporan','like',"%{$request->keyword}%")
        ->orWhere('nama','like',"%{$request->keyword}%")
        ->orWhere('alamat','like',"%{$request->keyword}%")
        ->orWhere('status','like',"%{$request->keyword}%")
        ->paginate(5);
        return view('admin/pengaduan.index',['data'=>$data]);
    }

    public function proses($id)
    {
        DB::table('tbl_pengaduan')->where('id_pengaduan',$id)->update([
            'status'=>'proses'
        ]);
        return redirect()->back()->with('message','Data sedang diproses');
    }

    public function selesai($id)
    {
        DB::table('tbl_pengaduan')->where('id_pengaduan',$id)->update([
            'status'=>'selesai'
        ]);
        return redirect()->back()->with('message','Data pengaduan diselesaikan');
    }

    public function tanggapan($id)
    {
        $data = DB::table('tbl_pengaduan')->where('id_pengaduan',$id)
        ->join('tbl_masyarakat', function($join){
            $join->on('tbl_pengaduan.nik_id','=','tbl_masyarakat.nik');
        })->first();
        return view('admin/pengaduan.tanggapan',['data'=>$data]);
    }

    public function ct_surathrn()
    {
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadview('/admin/pengaduan/ct_surathrn')->setPaper('a4', 'potrait');
        return $pdf->stream('Surat-Pengaduan-Harian-pdf');
    }

    public function ct_laporankegiatan()
    {
        $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf = PDF::loadview('/admin/pengaduan/ct_laporankegiatan')->setPaper('a4', 'landscape');
        return $pdf->stream('Laporan-Kegiataan-Teknisi-pdf');
    }
}
