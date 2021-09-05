<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

class MasyarakatController extends Controller
{

    private function _validation(Request $request)
    {
        $validation = $request->validate([
            'nik' => 'required|max:16',
            'nama' => 'required|max:35',
            'username' => 'required|max:25',
            'password' => 'required',
        ],
        [
            'nik.required' => 'Harus diisi',
            'nik.max' => 'Huruf jangan melebihi 16',
            'nama.required' => 'Harus diisi',
            'nama.max' => 'Huruf jangan melebihi 35',
            'username.required' => 'Harus diisi',
            'username.max' => 'Huruf jangan melebihi 25',
            'password.required' => 'harus diisi',
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = DB::table('tbl_masyarakat')
        ->where('nik','like',"%{$request->keyword}%")
        ->orWhere('nama','like',"%{$request->keyword}%")
        ->orWhere('username','like',"%{$request->keyword}%")
        ->paginate(5);
        return view('admin/masyarakat.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/masyarakat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_masyarakat')->insert([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($password),
            'telp'=>$request->telp
        ]);
        return redirect('masyarakat')->with('message','Berhasil ditambahkan');
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
        $data = DB::table('tbl_masyarakat')->where('nik',$id)->first();
        return view('admin/masyarakat.edit',['data'=>$data]);
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
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_masyarakat')->where('nik',$id)->update([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($password),
            'telp'=>$request->telp
        ]);
        return redirect('masyarakat')->with('message','Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tbl_masyarakat')->where('nik',$id)->delete();
        return redirect()->back()->with('message','Berhasil dihapus');
    }

    public function depan()
    {
        return view('masyarakat.index');
    }

    public function regis(Request $request)
    {
        $this->_validation($request);
        $password = $request->password;
        DB::table('tbl_masyarakat')->insert([
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'username'=>$request->username,
            'password'=>bcrypt($password),
            'telp'=>$request->telp
        ]);
        return redirect('loginmasyarakat')->with('message','Register berhasil ditambahkan');
    }

    public function pengaduan()
    {
        return view('masyarakat.pengaduan');
    }

    public function prosespengaduan(Request $request)
    {
        $lokasi_file = public_path('/assets/img/produk');

        if(!empty($request->gambar_pengaduan))
        {
        //Resize Gambar Pengaduan
        $gambar_pengaduan = $request->file('gambar_pengaduan');
        $nama_gambar_pengaduan = 'pengaduan_'. time() . '.' . $gambar_pengaduan->getClientOriginalExtension();
        $resize_gambar_pengaduan = Image::make($gambar_pengaduan->getRealPath());
        $resize_gambar_pengaduan->save($lokasi_file . '/' . $nama_gambar_pengaduan);
        //End resize Gambar Pengaduan

        $tanggal = date('Y-m-d');
        DB::table('tbl_pengaduan')->insert([
            'tanggal_pengaduan'=>$tanggal,
            'nik_id'=>Auth::guard('masyarakat')->user()->nik,
            'isi_laporan'=>$request->isi,
            'alamat'=>$request->alamat,
            'status'=>'terkirim',
            'foto'=>$nama_gambar_pengaduan
        ]);
        }else{
            $tanggal = date('Y-m-d');
            DB::table('tbl_pengaduan')->insert([
                'tanggal_pengaduan'=>$tanggal,
                'nik_id'=>Auth::guard('masyarakat')->user()->nik,
                'isi_laporan'=>$request->isi,
                'alamat'=>$request->alamat,
                'status'=>'terkirim'
            ]);
        }

        return redirect('/history')->with('message','Pengaduan terkirim');

    }

    public function history()
    {
        $data = DB::table('tbl_pengaduan')->where('nik_id',Auth::guard('masyarakat')->user()->nik)->simplepaginate(3);
        return view('masyarakat.history',['data'=>$data]);
    }

    public function tanggapan($id)
    {
        $data = DB::table('tbl_tanggapan')->where('pengaduan_id',$id)->first();
        return view('masyarakat.tanggapan',['data'=>$data]);
    }
}
