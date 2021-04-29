<?php

namespace App\Http\Controllers;
use App\Customer;
use App\OrderVehicle;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){

        $id = session('loginUser')['id'];
        $customers = Customer::where('id', '=', $id)->get();
        // dd($customer[0]);
        $customer = $customers[0];
        $customerid = $id;

        // dd($customerid);
        // $vehicle = DB::table('order_vehicles')
        //     ->select('order_vehicles.vehiclesName','vehicles.VehicleImage AS VehicleImage','order_vehicles.FromDate','order_vehicles.ToDate','order_vehicles.total_price','order_vehicles.status')
        //     ->join('vehicles','order_vehicles.id', '=', 'vehicles.id' )
        //     ->get();

        $vehicle = DB::table('order_vehicles')
            ->select('order_vehicles.customer_id','order_vehicles.vehiclesName','vehicles.VehicleImage AS VehicleImage','order_vehicles.FromDate','order_vehicles.ToDate','order_vehicles.total_price','order_vehicles.status')
            ->join('vehicles','order_vehicles.vehicles_id', '=', 'vehicles.id' )
            ->where('order_vehicles.customer_id', '=', $customerid)
            ->get();

        // $vehicle=$vehicle[1];
        // dd($vehicle[2]->customer_id);
        // printf($vehicle);
        // dd($vehicle);
        return view('Pages.my-account', compact('customer', 'vehicle'));
    }

    public function update(Request $request)
    {
        $id = session('loginUser')['id'];
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if (!empty($request->image)) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        }
        $customer = Customer::find($id);
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone = $request->input('phone');
        if (isset($imageName)) {
            $customer->image = $imageName;
        }
        
        $customer->save();
        return redirect('/my-account');
    }


}
