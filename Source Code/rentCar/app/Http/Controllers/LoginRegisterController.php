<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Customer;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

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

        $Customer = Customer::where('email', "=", request()->emailL)->get();

            // dd($Customer);
            // Crypt::decrypt($request['password'])
            // dd($Customer);
        if (count($Customer) && Hash::check(request()->passwordL, $Customer->first()->password)) {
        //    if (count($Admin) && Hash::check(request()->password, $Admin->first()->password)) {
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
        $newCustomer -> password =  Hash::make($request->input('password'));
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
