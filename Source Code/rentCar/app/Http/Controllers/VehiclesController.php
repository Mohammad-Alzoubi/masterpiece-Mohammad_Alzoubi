<?php

namespace App\Http\Controllers;
use App\Vehicle;
use App\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class VehiclesController extends Controller
{
    public function index(){
        $vehicles = DB::table('vehicles')
        // ->select('*')
            ->select('vehicles.id', 'vehicles.VehiclesTitle','brands.name AS brand_name','vehicles.VehicleImage', 'vehicles.price', 'vehicles.VehicleDescription', 'vehicles.FuelType', 'vehicles.ModelYear', )
            ->join("brands", "vehicles.Brand_id", "brands.id")
            ->get();

            // dd($vehicles->brand_name);
        $brands = Brand::all();
        return view('admin.vehicles',compact('vehicles', 'brands'));
    }

    // Store In database
    public function store(Request $request){
        request()->validate([
            'name'         => 'required|min:3',
            'overview'     => 'required',
            'description'  => 'required',
            'model'        => 'required',
            'image'        => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'        => 'required | numeric |min:0',
            'discount'     => 'required | numeric | min:0 | max:100',
            'brand'        => 'required',
            'fuel'         => 'required',
            'transmission' => 'required',
            'doors'        => 'required | numeric |min:0',
            'passengers'   => 'required | numeric |min:0',
            'luggages'     => 'required | numeric |min:0',
        ]);

        if(!empty(request()->image)){
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = 'default.png';
        }

        $vehicle = new Vehicle;

        $vehicle->VehiclesTitle       = $request->input('name');
        $vehicle->VehiclesOverview    = $request->input('overview');
        $vehicle->VehicleDescription  = $request->input('description');
        $vehicle->ModelYear           = $request->input('model');
        $vehicle->price               = $request->input('price');
        $vehicle->discount            = $request->input('discount');
        $vehicle->FuelType            = $request->input('fuel');
        $vehicle->TransmissionGuide   = $request->input('transmission');
        $vehicle->Doors               = $request->input('doors');
        $vehicle->Passengers          = $request->input('passengers');
        $vehicle->Luggages            = $request->input('luggages');
        $vehicle->Brand_id            = $request->input('brand');
        $vehicle->status              = $request->input('statusV');
        $vehicle->color              = $request->input('color');
        $vehicle->VehicleImage        = $imageName;
// -------------------------------------------
        $vehicle->AudioInput        = $request->input('audio');
        $vehicle->Wheel_drive       = $request->input('wheel_drive');
        $vehicle->GPS_Navigation    = $request->input('gps');
        $vehicle->Parking_Sensors   = $request->input('parking_sensors');
        $vehicle->Bluetooth         = $request->input('bluetooth');
        $vehicle->USB_input         = $request->input('usb');
        $vehicle->Safe              = $request->input('safe');
        $vehicle->WI_FI             = $request->input('wifi');
        $vehicle->Heated_Seats      = $request->input('heated');
        $vehicle->FM_Radio          = $request->input('fm_radio');
        $vehicle->Air_Conditioner   = $request->input('conditioner');
        $vehicle->Sunroof           = $request->input('sunroof');

        $vehicle->save();
        return back()->with('success', 'Vehicle created successfully.');
    }

    // editVehicles.blade
    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        $brands = Brand::all();

        return view('admin.editVehicles', compact('vehicle', 'brands'));
    }


    public function update(Request $request, $id)
    {
        request()->validate([
            // 'name'         => 'required|min:3',
            // 'overview'     => 'required',
            // 'description'  => 'required',
            // 'model'        => 'required',
            // 'image'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'price'        => 'required | numeric |min:0',
            // 'discount'     => 'required | numeric | min:0 | max:100',
            // 'brand'        => 'required',
            // 'fuel'         => 'required',
            // 'transmission' => 'required',
            // 'doors'        => 'required | numeric |min:0',
            // 'passengers'   => 'required | numeric |min:0',
            // 'luggages'     => 'required | numeric |min:0',
        ]);
        
        $vehicle = Vehicle::find($id);

        if (!empty(request()->image)) {
            $imageName = time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images'), $imageName);
        } else {
            $imageName = $vehicle->VehicleImage;
        }
        
        // $product->name = $request->get('name');
        $vehicle->VehiclesTitle       = $request->get('name');
        $vehicle->VehiclesOverview    = $request->get('overview');
        $vehicle->VehicleDescription  = $request->get('description');
        $vehicle->ModelYear           = $request->get('model');
        $vehicle->price               = $request->get('price');
        $vehicle->discount            = $request->get('discount');
        $vehicle->FuelType            = $request->get('fuel');
        $vehicle->TransmissionGuide   = $request->get('transmission');
        $vehicle->Doors               = $request->get('doors');
        $vehicle->Passengers          = $request->get('passengers');
        $vehicle->Luggages            = $request->get('luggages');
        $vehicle->Brand_id            = $request->get('brand');
        $vehicle->status              = $request->get('statusV');
        $vehicle->VehicleImage        = $imageName;
// -------------------------------------------
        // $vehicle->AudioInput        = $request->get('audio');
        // $vehicle->Wheel_drive       = $request->get('wheel_drive');
        // $vehicle->GPS_Navigation    = $request->get('gps');
        // $vehicle->Parking_Sensors   = $request->get('parking_sensors');
        // $vehicle->Bluetooth         = $request->get('bluetooth');
        // $vehicle->USB_input         = $request->get('usb');
        // $vehicle->Safe              = $request->get('safe');
        // $vehicle->WI_FI             = $request->get('wifi');
        // $vehicle->Heated_Seats      = $request->get('heated');
        // $vehicle->FM_Radio          = $request->get('fm_radio');
        // $vehicle->Air_Conditioner   = $request->get('conditioner');
        // $vehicle->Sunroof           = $request->get('sunroof');

        $vehicle->save();
        // dd($vehicle);
        return redirect('admin/vehicles')->with('success', 'updated!');
    }

    
    public function destroy($id)
    {
        $Product = Vehicle::find($id);
        $Product->delete();

        return back()->with('success', 'Vehicle deleted!');
    }

}
