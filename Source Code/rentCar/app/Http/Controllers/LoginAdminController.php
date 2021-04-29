<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginAdminController extends Controller
{

    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);
        $Admin = Admin::where( 'password', "=", request()->password ,'AND', 'email', "=", request()->email)
            ->get();
            // dd($Admin);

        if (count($Admin)) {
            $request->session()->put("loginUser", ["id" => $Admin[0]->id, "role" => "admin"]);
            return redirect('/admin/dashboard');
        }else{
            return redirect('/loginAdmin')->with('Error', 'Wrong email or password');
        }
    }
}
