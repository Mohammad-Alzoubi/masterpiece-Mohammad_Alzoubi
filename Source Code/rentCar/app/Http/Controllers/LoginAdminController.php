<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $Admin = Admin::where('email', "=", request()->email)
            ->get();
            // dd($Admin);
            // 'password', "=", request()->password ,'AND', 

        if (count($Admin) && Hash::check(request()->password, $Admin->first()->password)) {
            
            $request->session()->put("loginUser", ["id" => $Admin[0]->id, "role" => "admin"]);
            return redirect('/admin/dashboard');
        }else{
            return redirect('/loginAdmin')->with('Error', 'Wrong email or password');
        }
    }
}
