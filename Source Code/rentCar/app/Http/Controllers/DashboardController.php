<?php

namespace App\Http\Controllers;
use App\Admin;
use App\Customer;
use App\Vehicle;
use App\Contact;
use App\OrderVehicle;
use App\Brand;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $admin        = Admin::all();
        $customer     = Customer::all();
        $vehicle      = Vehicle::all();
        $brand        = Brand::all();
        $orderVehicle = OrderVehicle::all();
        $contact      = Contact::all();
        // dd(count($brand));
        $admin        = count($admin);
        $customer     = count($customer);
        $vehicle      = count($vehicle);
        $brand        = count($brand);
        $orderVehicle = count($orderVehicle);
        $contact      = count($contact);

        return view('admin.dashboard', compact('admin','customer','vehicle','brand','orderVehicle','contact'));
    }
}
