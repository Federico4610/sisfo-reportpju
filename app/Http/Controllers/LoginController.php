<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\tatausaha;
use App\kepala;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function getLogin()
    {
      return view('admin.login');
    }

    public function postLogin(Request $request)
    {



        // Attempt to log the user in
        // Passwordnya pake bcrypt
      if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
          // if successful, then redirect to their intended location
        return redirect()->intended('dashboard');
      } elseif (Auth::guard('masyarakat')->attempt(['username' => $request->username, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('masyarakat_pengaduan');
    } elseif (Auth::guard('kepala')->attempt(['username' => $request->username, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('dashboard');
    } elseif (Auth::guard('tatausaha')->attempt(['username' => $request->username, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
      return redirect()->intended('tatausaha');
    } else {
        return redirect('/login')->with('message','username atau password salah');
      }

    }

    public function logout()
    {
      if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
      }

      return view('masyarakat.index');

    }

    public function logoutmasyarakat()
    {
      if (Auth::guard('masyarakat')->check()) {
        Auth::guard('masyarakat')->logout();
      }

      return view('masyarakat.index');

    }
}
