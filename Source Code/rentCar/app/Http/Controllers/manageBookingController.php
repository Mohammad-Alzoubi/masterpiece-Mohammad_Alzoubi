<?php

namespace App\Http\Controllers;
use App\OrderVehicle;
use App\Customer;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class manageBookingController extends Controller
{
    public function index(){
        // vehicles_id customer_id booking_id vehiclesName customerName total_price FromDate ToDate DrivingImage IdentityImage status created_at updated_at

        // $bookings = OrderVehicle::all();
        $bookings = DB::table('order_vehicles')
            ->select('order_vehicles.id','order_vehicles.vehiclesName','order_vehicles.customerName','order_vehicles.total_price','order_vehicles.FromDate','order_vehicles.ToDate','order_vehicles.status', 'order_vehicles.created_at','vehicles.VehicleImage AS VehicleImage')
            ->join("vehicles", "order_vehicles.vehicles_id", "vehicles.id")
            ->get();
        // dd($bookings);
        
        return view('admin.manage-bookings',compact('bookings'));
    }

    public function changeStatus($id, $status)
    {
        // dd($id, $status);
        $booking = OrderVehicle::find($id);
        $booking->status = $status;
        $booking->save();
        return back();
    }
}
