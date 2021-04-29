<?php

namespace App\Http\Controllers;
use App\Vehicle;
use App\Customer;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// require 'vendor/autoload.php';

use Carbon\Carbon;


class OrderController extends Controller
{
    public function index(){

        return view('Pages.checkout');
    }

    public function store(Request $request){
        // dd('test1');
        
        
        request()->validate([
            'pickup_location' => 'required',
            'drop_location'   => 'required',
            'pickup_date'     => 'required',
            'pickup_time'     => 'required',
            'drop_date'       => 'required',
            'drop_time'       => 'required',
        ]);

        $var = new Booking;
        $var -> pickup_location = $request->input('pickup_location');
        $var -> drop_location   = $request->input('drop_location');
        $var -> pickup_Date     = $request->input('pickup_date');
        $var -> pickup_Time     = $request->input('pickup_time');
        $var -> drop_Date       = $request->input('drop_date');
        $var -> drop_Time       = $request->input('drop_time');
        $var ->save();
        // dd($var);
        // =========================================

        // get DetailsBooking;
        $bookingDetails = DB::table('bookings')->latest('id')->first();

        // =========================================
        // get id Vehicle
        $vehicleID = $request->vehicleID;
        $Vehicles = DB::table('vehicles')
            ->select('vehicles.id', 'vehicles.Brand_id', 'vehicles.VehiclesTitle','vehicles.VehicleImage', 'vehicles.price')
            ->where('vehicles.id', $vehicleID)
            ->get();
            $vehicle = $Vehicles[0];
            // dd($vehicle->price);

        // =========================================
        // get customer
        $arr = $request->session()->get('loginUser');
        $customer_id = $arr['id'];
        $customerDetails = DB::table('customers')
            ->select('id', 'name', "email", 'phone')
            ->where('id', '=', $customer_id)
            ->get();
            $customer = $customerDetails[0];
            // dd($customer);


            // $date1  = '2020-02-11 ';
            // $time1  = '04:00';
            // $date2  = '2020-02-14 ';
            // $time2  = '07:00';

            $date1  = $bookingDetails->pickup_Date;
            $time1  = $bookingDetails->pickup_Time;
            $date2  = $bookingDetails->drop_Date;
            $time2  = $bookingDetails->drop_Time;

            $startTime = Carbon::parse($time1);
            $endTime   = Carbon::parse($time2);
            $totalDuration1 = $endTime->diffForHumans($startTime);

            $startTime = Carbon::parse($date1);
            $endTime = Carbon::parse($date2);
            $totalDuration2 = $endTime->diffForHumans($startTime);
            // dd($totalDuration);

            // calculate booking ber hour
            $bookingHour = $vehicle->price/24;
            // dd($bookingHour);
            

            // $hour = $totalDuration1[0];
            // dd($hour);
            ($totalDuration1[0]=='1' ? $hour = $totalDuration1[0]*0 : $hour = $totalDuration1[0]*$bookingHour);
            // $hour = $totalDuration1[0]*$bookingHour;
            // dd($hour);


            // calculate booking ber day
            $date = $totalDuration2[0]*$vehicle->price;
            // dd($date+$hour);
            // dd($totalDuration1);
            // dd($totalDuration2);

            $price = $date+$hour;
            $price = number_format($price, 2);
            // dd($price);

        return view('Pages.checkout', compact('vehicle','bookingDetails', 'customer', 'price'));
    }
    // ==================
}
