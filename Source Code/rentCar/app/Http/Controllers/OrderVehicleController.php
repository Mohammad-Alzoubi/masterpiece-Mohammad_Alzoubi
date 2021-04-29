<?php

namespace App\Http\Controllers;
use App\OrderVehicle;
use App\Customer;
use App\Booking;
use App\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class OrderVehicleController extends Controller
{
    // public function index(){
    //     return view('Pages.checkout');
    // }

    // ==================
    public function store(Request $request)
    {
        $arr = $request->session()->get('loginUser');
        $customer_id = $arr['id'];

        // Add Phone Number
        $Customer = Customer::find($customer_id);
        $Customer->phone = $request->get('phone');
        $Customer->save();

        if (!empty(request()->imageLicense)){
            $imageLicense = time().'.'.request()->imageLicense->getClientOriginalExtension();
            request()->imageLicense->move(public_path('images'), $imageLicense);
        }

        if (!empty(request()->imageIdentity)){
            $imageIdentity = time().'.'.request()->imageIdentity->getClientOriginalExtension();
            request()->imageIdentity->move(public_path('images'), $imageIdentity);
        }

        // calculate the total price
        $totalPrice  = $request-> get('TotalPrice');

        $vehicles_id = $request-> vehicleId;
        $booking_id  = $request-> bookingId;

        // get id booking
        $bookingID = $request->bookingId;
        $bookings = DB::table('bookings')
            ->select('bookings.pickup_Date','bookings.drop_Date')
            ->where('bookings.id', $bookingID)
            ->get();
            $booking  = $bookings[0];

            $FromDate = $booking->pickup_Date;
            $ToDate   = $booking->drop_Date;
            // dd($booking->pickup_Date);
            // dd($ToDate);

        // ===========================================
        //Get customers name
        $customers = DB::table('customers')
            ->select('customers.name')
            ->where("customers.id", $customer_id)
            ->get();
            $customer = $customers[0]->name;
            // dd($customer);
            // ===========================================

        //Get vehicles name
        $vehiclesName = DB::table('vehicles')
            ->select('vehicles.VehiclesTitle')
            ->where("vehicles.id", $vehicles_id)
            ->get();
            $VehicleTitle = $vehiclesName[0]->VehiclesTitle;

            $changStatus = Vehicle::find($vehicles_id);
            $changStatus->status = '0';
            $changStatus->save();

        // dd($VehicleTitle);
        // ===========================================
        
        //add to order table order
        $order = new OrderVehicle;
        
        $order->vehicles_id   = $vehicles_id;
        $order->customer_id   = $customer_id;
        $order->booking_id    = $booking_id;
        $order->vehiclesName  = $VehicleTitle;
        $order->customerName  = $customer;
        $order->FromDate      = $FromDate;
        $order->ToDate        = $ToDate;
        $order->total_price   = $totalPrice;
        $order->DrivingImage  = $imageLicense;
        $order->IdentityImage = $imageIdentity;

        $order->save();

        return redirect("/");
        // return view('Pages.my-account');
    }
}
