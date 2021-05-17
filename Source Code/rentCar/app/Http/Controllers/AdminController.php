<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::all();
        // dd($admins);
        return view('admin.index', compact('admins'));
    }

    // Store In database
    public function store(Request $request){
        request()->validate([
            'name'     => 'required|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if(!empty(request()->image)){
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $admin = Admin::where('email', '=', $request->email)
            ->get();
            // dd($admin);
        if (count($admin)) {
            return back()->with('failed', 'Email already exists');
        } else {
        $var = new Admin;
        $var->name     = $request->input('name');
        $var->email    = $request->input('email');
        $var->password = Hash::make($request->input('password'));
        $var->image    = $imageName;

        $var->save();
        return back()->with('success', 'Admin created successfully.');
        }
    }


// Edit
    public function edit($id)
    {
        $admin = Admin::find($id);

        // dd($admin);
        // $admin1 = Crypt::decrypt($admin->password);
        // $admin1 = Crypt::decrypt('$2y$10$TCNlSTpSVRb9HP8X3hzAWOC2WNe3WJpVvK60YL4Zjdvt1m14UoXLy');
        // $admin1 = Crypt::decryptString('$2y$10$TCNlSTpSVRb9HP8X3hzAWOC2WNe3WJpVvK60YL4Zjdvt1m14UoXLy');
        // $admin1 = $admin->password;
        // dd($admin1);
        return view('admin.editAdmin', compact('admin'));
    }

// update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'     => 'required|min:4',
            'email'    => 'required|email',
            'password' => 'required|min:6',
            'image'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $admin = Admin::find($id);
            $imageName = $admin->image;
        }

        $admin = Admin::find($id);
        $admin->name     = $request->get('name');
        $admin->email    = $request->get('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->image    = $imageName;
        $admin->save();

        return redirect('/admin')->with('success', 'Contact updated!');
    }


// Delete
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return back()->with('success', 'Admin deleted!');
    }

}
