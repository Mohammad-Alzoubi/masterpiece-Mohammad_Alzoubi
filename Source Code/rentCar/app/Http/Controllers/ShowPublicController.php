<?php

namespace App\Http\Controllers;
use App\Vehicle;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShowPublicController extends Controller
{
    // Show Vehicle HomePage
    public function index(){
        $vehicles = Vehicle::all();
        return view('Pages.index', compact('vehicles'));
    }
    
    // Show SingleVehicle car-single
    public function Vehicle($id){
        $Vehicles = DB::table('vehicles')
            ->select('vehicles.id', 'vehicles.Brand_id', 'vehicles.VehiclesTitle','vehicles.VehiclesOverview','vehicles.price','brands.name AS brand_name','vehicles.VehicleImage', 'vehicles.price', 'vehicles.VehicleDescription', 'vehicles.FuelType', 'vehicles.ModelYear','vehicles.TransmissionGuide', 'vehicles.Doors','vehicles.Passengers', 'vehicles.Luggages','vehicles.AudioInput','vehicles.Wheel_drive','vehicles.GPS_Navigation','vehicles.Parking_Sensors','vehicles.Bluetooth','vehicles.USB_input','vehicles.Safe','vehicles.WI_FI','vehicles.Heated_Seats','vehicles.FM_Radio','vehicles.Air_Conditioner','vehicles.Sunroof')
            ->where('vehicles.id', $id)
            ->join("brands", "vehicles.Brand_id", "brands.id")
            ->get();
            $vehicle = $Vehicles[0];

            // Related Vehicles
            $brand_id = $vehicle->Brand_id;
            $relatedVehicles = DB::table('vehicles')
            ->where('Brand_id', "=", $brand_id)
            ->where("id", "!=", $id)
            ->limit(3)
            ->get();
            // dd($relatedVehicles);

            // $bookingDetails = Booking::all();
            $bookingDetails = DB::table('bookings')->latest('id')->first();


            //Reviews Cars
            $reviews = DB::table('customers')
            ->select('reviews.comment', 'reviews.quality','reviews.price','reviews.comfort','reviews.driving', 'customers.name', 'customers.image', 'reviews.created_at')
            ->where('reviews.vehicle_id', '=', $id)
            ->join('reviews', 'customers.id', 'reviews.customer_id')
            ->get();
            // dd($reviews);

            return view('Pages.car-single', compact('vehicle','relatedVehicles','bookingDetails', 'reviews'));
    }


}
