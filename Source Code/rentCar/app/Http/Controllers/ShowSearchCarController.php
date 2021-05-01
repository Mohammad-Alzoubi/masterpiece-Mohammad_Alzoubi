<?php

namespace App\Http\Controllers;
use App\Vehicle;
use App\Brand;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShowSearchCarController extends Controller
{
    // car-search
    public function index(){
        $vehicles = Vehicle::all();
        $brands = Brand::all();

        $passengers = DB::table('vehicles')
        ->select('Passengers')
        ->distinct()
        ->orderBy('Passengers')
        ->get();

        return view('Pages.car-search', compact('vehicles','brands','passengers'));
    }

    public function index2(){

        $vehicles3  = DB::table('vehicles')
        ->limit(3)
        ->get();

        $vehicles = DB::table('vehicles')
        ->limit(15)
        ->offset(3)
        ->get();

        $vehiclePaginate = Vehicle::paginate(7);

        return view('Pages.cars', compact('vehicles3','vehicles','vehiclePaginate'));
    }

    // تم استدعائه من خلال 
    // route showPublicController

    /*
    public function Vehicle($id){
        $Vehicles = DB::table('vehicles')
            ->select('vehicles.id', 'vehicles.Brand_id', 'vehicles.VehiclesTitle','vehicles.VehiclesOverview','vehicles.price','brands.name AS brand_name','vehicles.VehicleImage', 'vehicles.price', 'vehicles.VehicleDescription', 'vehicles.FuelType', 'vehicles.ModelYear','vehicles.TransmissionGuide', 'vehicles.Doors','vehicles.Passengers', 'vehicles.Luggages','vehicles.AudioInput','vehicles.Wheel_drive','vehicles.GPS_Navigation','vehicles.Parking_Sensors','vehicles.Bluetooth','vehicles.USB_input','vehicles.Safe','vehicles.WI_FI','vehicles.Heated_Seats','vehicles.FM_Radio','vehicles.Air_Conditioner','vehicles.Sunroof')
            ->where('vehicles.id', $id)
            ->join("brands", "vehicles.Brand_id", "brands.id")
            ->get();
            // dd($Vehicles[0]);
            $vehicle = $Vehicles[0];

            // Related Vehicles
            $brand_id = $vehicle->Brand_id;
            // dd($brand_id);
            $relatedVehicles = DB::table('vehicles')
            ->where('Brand_id', "=", $brand_id)
            ->where("id", "!=", $id)
            ->limit(3)
            ->get();
            return view('Pages.car-single', compact('vehicle', 'relatedVehicles'));
    }
    */

    // //Search
    public function search(Request $request)
    {
        $searchBrand     = $request->input('brand');
        $searchPassenger = $request->input('passengers');
        $search_Sort     = $request->input('sort');
        $search_Color    = $request->input('color');
        // dd($searchBrand);


        $vehicles = Vehicle::query()->get();
            
        if ($searchPassenger) {
            $vehicles = Vehicle::query()
                ->where('Passengers', 'LIKE', "%{$searchPassenger}%")
                ->get();
        }


        if ($searchBrand) {
            $vehicles = Vehicle::query()
                ->where('Brand_id', 'LIKE', "%{$searchBrand}%")
                ->get();
                // dd($vehicles);
        }

        if ($searchBrand && $searchPassenger) {
            $vehicles = Vehicle::query()
                ->where('Passengers', 'LIKE', "%{$searchPassenger}%")
                ->where('Brand_id', 'LIKE', "%{$searchBrand}%")
                ->get();
        }
        
        if ($search_Color) {
            $vehicles = Vehicle::query()
                ->where('color', 'LIKE', "%{$search_Color}%")
                ->get();
        }

        if ($search_Color && $searchBrand && $searchPassenger) {
            $vehicles = Vehicle::query()
                ->where('Passengers', 'LIKE', "%{$searchPassenger}%")
                ->where('color', 'LIKE', "%{$search_Color}%")
                ->where('Brand_id', 'LIKE', "%{$searchBrand}%")
                ->get();
        }


        if ($search_Sort) {
            $vehicles = Vehicle::query()
            ->where('Passengers', 'LIKE', "%{$searchPassenger}%")
            ->where('Brand_id', 'LIKE', "%{$searchBrand}%")
            ->where('color', 'LIKE', "%{$search_Color}%")
            ->where('price', '>', "0")
            ->orderBy('price','desc')
            ->get();
        }
        if($search_Sort == '0'){
            $vehicles = Vehicle::query()
            ->where('Passengers', 'LIKE', "%{$searchPassenger}%")
            ->where('Brand_id', 'LIKE', "%{$searchBrand}%")
            ->where('color', 'LIKE', "%{$search_Color}%")
            ->where('price', '<', "100000")
            ->orderBy('price','ASC')
            ->get();
        }


        $passengers = DB::table('vehicles')
        ->select('Passengers')
        ->distinct()
        ->orderBy('Passengers')
        ->get();

        $brands = Brand::all();
        // dd($brands);
        return view('Pages.car-search', compact('vehicles','brands', 'passengers'));
    }

}
