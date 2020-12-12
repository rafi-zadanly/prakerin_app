<?php

namespace App\Http\Controllers;

use App\Models\CustomUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $checkAuth = CustomUser::where('email', $credentials['email'])->first();
        // $checkAuth = DB::table('students')->where('email', $credentials['email'])->first();

        if ($checkAuth != NULL && Hash::check($credentials['password'], $checkAuth->password)) {
            $request->session()->put('fullname', $checkAuth->fullname);
        } else {
            return back()->withInput()->with('message', "The credentials doesn't match.")->with('type', 'warning');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('custom/login')->with('message', 'Logout successful.')->with('type', 'success');
    }

    public function report_page()
    {
        return view('templates/header');
    }
}
