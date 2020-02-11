<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\models;
use App\m_mem;
use Auth;
use DB;
use Illuminate\Http\Request;
use Redirect;

class LoginController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new models();
        $this->middleware('guest')->except('logout');
    }
    public function index_login()
    {
        return view('auth.login');
    }
    public function index_register()
    {
        return view('auth.register');
    }
    public function register(Request $req)
    {
        if ($req->m_password == $req->m_password_retype) {
            $data = $this->model->m_mem()->create([
                'm_username' => $req->m_username,
                'm_email' => $req->m_email,
                'm_name' => $req->m_name,
                'm_password' => sha1(md5('لا إله إلاّ الله') . $req->m_password),
            ]);
            return Response()->json(['status' => 'sukses']);
        } else {
            return Response()->json(['status' => 'password_tidak_sama']);
        }
    }
    public function login(Request $req)
    {
        $user = m_mem::where(DB::raw('BINARY m_username'), $req->username)->first();
        $email = m_mem::where(DB::raw('BINARY m_email'), $req->username)->first();
        // return 'a';
        // return [json_encode($user), json_encode($email)];
        if ($user && $user->m_password == sha1(md5('لا إله إلاّ الله') . $req->password)) {
            Auth::login($user);
            return redirect(url('/home'));
        } elseif ($email && $email->m_password == sha1(md5('لا إله إلاّ الله') . $req->password)) {
            Auth::login($email);
            return redirect(url('/home'));
        } elseif ($user == null && $email == null) {
            return redirect(url('/login'));
        } else {
            return Redirect::back()->withErrors(['Password atau Username Anda Salah !']);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
