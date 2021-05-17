<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::all();
        return view('admin.customer', compact('customers'));
    }

    public function store(Request $request){
        request()->validate([
            'name'     => 'required|min:3',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $imageName= 'default.png';
        }

        $customer = Customer::where('email', '=', $request->email)
            ->get();
        if (count($customer)) {
            return back()->with('failed', 'Email already exists');
        } else {
        $var = new Customer;
        $var -> name     = $request->input('name');
        $var -> email    = $request->input('email');
        $var -> password = Hash::make($request->input('password'));
        $var ->image     = $imageName;
        $var ->save();

        return back()->with('success', 'Customer created successfully');
        }
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('admin.editCustomer', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        request()->validate([
            'name'=> 'required|min:3',
            'email'=> 'required|email',
            'password'=> 'required|min:6',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        }
        else {
            $Customer = Customer::find($id);
            $imageName= $Customer-> image;
        }

        $Customer = Customer::find($id);
        $Customer->name     = $request->get('name');
        $Customer->email    = $request->get('email');
        $Customer->password = Hash::make($request->input('password'));
        $Customer->image    = $imageName;
        $Customer->save();

        return redirect('admin/customer')->with('success', 'Contact updated!');
    }





    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return back()->with('success', 'Customer deleted!');
    }

}
