<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'prevent-back-history'],function(){


Route::view('index', 'masyarakat/index');
Route::get('loginmasyarakat', function () {
    return view('welcome');
})->name('login.masyarakat');

Route::get('login', 'LoginController@getLogin')->name('login');
Route::post('proseslogin','LoginController@postLogin');
Route::get('logout','LoginController@logout');
Route::get('logoutmasyarakat','LoginController@logoutmasyarakat');
Route::view('register', 'register');
Route::post('regis', 'MasyarakatController@regis')->name('register');

Route::group(['middleware'=>'auth:admin,tatausaha,kepala'], function(){
    Route::get('dashboard','DashboardController@index');

    // Petugas
    Route::resource('petugas', 'PetugasController');

    // Masyarakat
    Route::resource('masyarakat', 'MasyarakatController');

    // Stok
    Route::resource('stok', 'StokController');

    // Pengaduan
    Route::get('pengaduan','PengaduanController@index');
    Route::get('pengaduan_p/{id}','PengaduanController@proses')->name('pengaduan.proses');
    Route::get('pengaduan_s/{id}','PengaduanController@selesai')->name('pengaduan.selesai');
    Route::get('pengaduan_t/{id}','PengaduanController@tanggapan')->name('pengaduan.tanggapan');
    Route::get('cetak_pdf','PengaduanController@cetakpdf')->name('pengaduan.cetak');


    // Tanggapan
    Route::post('tambahtanggapan','TanggapanController@tambah');
    Route::get('tanggapan','TanggapanController@index');
    Route::get('tanggapan/{id}','TanggapanController@edit')->name('tanggapan.edit');
    Route::patch('tanggapans/{id}','TanggapanController@update')->name('tanggapan.update');
    Route::delete('tanggapand/{id}','TanggapanController@destroy')->name('tanggapan.destroy');

    //Laporan
    Route::view('laporan','admin/laporan.index');
    Route::get('rekap_laporan','LaporanController@rekap');
});


Route::get('/','MasyarakatController@depan');

Route::group(['middleware'=>'auth:masyarakat'], function(){
    Route::get('masyarakat_pengaduan','MasyarakatController@pengaduan');
    Route::post('prosespengaduan','MasyarakatController@prosespengaduan');
    Route::get('history','MasyarakatController@history');
    Route::get('lihattanggapan/{id}','MasyarakatController@tanggapan')->name('tanggapans');
});

}); //Prevent Back History Middleware
