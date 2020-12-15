<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $checkAuth = Student::where('email', $credentials['email'])->first();

        if ($checkAuth != NULL && Hash::check($credentials['password'], $checkAuth->password)) {
            $request->session()->put('auth.id', $checkAuth->id);
            $request->session()->put('auth.fullname', $checkAuth->fullname);
            $request->session()->put('auth.isLogin', true);
            return redirect('custom/dashboard');
        } else {
            return back()->withInput()->with('message', "The credentials doesn't match.")->with('type', 'warning');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('custom/login')->with('message', 'Logout successful.')->with('type', 'success');
    }

    public function base()
    {
        return view('templates.base');
    }

    public function dashboard()
    {
        $data['page'] = 'Pengajuan';

        return view('templates/base', $data);
    }
<<<<<<< HEAD

    public function pengajuan()
    {
        return view('pengajuan');
    }

    public function status_siswa()
    {
        return view('status_siswa');
    }
=======
>>>>>>> 9da17952744b602acf913a06effa5246a75f1f17
}
