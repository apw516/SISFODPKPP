<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestEmail;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.index');
    }
    public function index_register()
    {
        return view('auth.index_register');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        $authenticate = [
            'email' => $request->email,
            'password' => $request->password,
            'is_activated' => 1,
        ];
        if(Auth::attempt($authenticate)){
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return back()->with('loginError','Login Gagal !');
    }
    public function Store(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|unique:users,username',
            'fullname' => 'required|max:255',
            'nomorponsel' => 'required|numeric|min:10',
            'email' => 'required|email:dns|unique:users,email',
            'password1' => 'required|min:5|max:255|same:password2',
            'namaperusahaan' => 'required|min:5|max:255'
        ],[
            'fullname.required' => "Nama wajib diisi",
            'nomorponsel.required' => 'Nomor Ponsel wajib diisi',
            'nomorponsel.min:10' => 'Nomor Ponsel tidak valid',
            'nomorponsel.numeric' => 'Nomor Ponsel tidak valid',
            'email.required' => "Email wajib diisi",
            'email.email' => "Email Tidak Valid",
            'username.unique' => "Username Sudah Terdaftar",
            'email.unique' => "Email Sudah Terdaftar",
            'password1.required' => "Password wajib diisi",
            'password1.same' => "Password tidak sama",
            'namaperusahaan.required' => "Nama perusahaan wajib diisi",
        ]);
        $password = Hash::make($request->password1);
        $data = [
            'username' => $request->username,
            'nama_lengkap' => $request->fullname,
            'nomor_ponsel' => $request->nomorponsel,
            'email' => $request->email,
            'password' => $password,
            'nama_perusahaan' => $request->namaperusahaan
        ];
        // $mailData = [
        //     'name' => 'apw'
        // ];
        // Mail::to($request->email)->send(new TestEmail($mailData));
        User::create($data);

        return redirect('/')->with('success','Registrasi Berhasil, Silahkan Cek Email Anda Untuk Melihat Proses Aktivasi !');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
