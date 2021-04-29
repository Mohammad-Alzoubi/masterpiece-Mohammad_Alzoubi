<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Customer;
use Illuminate\Http\Request;

class LoginRegisterController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'emailL' => 'required',
            'passwordL' => 'required',
        ]);
        // $Admin = Admin::where( 'password', "=", request()->password ,'And', 'email', "=", request()->email)
        //     ->get();
        //     // dd($Admin);

        // if (count($Admin)) {
        //     $request->session()->put("loginUser", ["id" => $Admin[0]->id, "role" => "admin"]);
        //     return redirect('/admin');
        // }else {
        //     return redirect('/login')->with('Error', 'Wrong email or password');
        // }

        $Customer = Customer::where('email', "=", request()->emailL, "And", 'password', "=", request()->passwordL)
            ->get();
        if (count($Customer)) {
            $request->session()->put("loginUser", ["id" => $Customer[0]->id, "role" => "customer"]);
            return redirect('/');
        } else {
            return redirect('/login')->with('Error', 'Wrong email or password');
        }
    }


    public function register(Request $request){
        request()->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $customer = Customer::where('email', '=', $request->email)
            ->get();
        if (count($customer)) {
            return back()->with('failed', 'Email already exists');
        } else {

        $newCustomer = new Customer;
        $newCustomer -> name     = $request->input('name'); 
        $newCustomer -> email    = $request->input('email');
        $newCustomer -> password = $request->input('password');
        $newCustomer->save();

        return back()->with('success', 'Successfully Register');
        }

    }









    public function logout()
    {
        session()->forget('loginUser');
        return redirect('/');
    }




}
