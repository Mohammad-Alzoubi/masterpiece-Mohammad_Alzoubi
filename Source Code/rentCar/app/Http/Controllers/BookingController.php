<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(){

        return view('Pages.index');
    }

    // pickup_location drop_location pickup_date pickup_time drop_date drop_time
    public function store(Request $request){
        // dd('test');
        request()->validate([
            'pickup_location' => 'required',
            'drop_location'   => 'required',
            'pickup_date'     => 'required',
            'pickup_time'     => 'required',
            'drop_date'       => 'required',
            'drop_time'       => 'required',
        ]);
        // 					
        $var = new Booking;
        $var -> pickup_location = $request->input('pickup_location');
        $var -> drop_location   = $request->input('drop_location');
        $var -> pickup_Date     = $request->input('pickup_date');
        $var -> pickup_Time     = $request->input('pickup_time');
        $var -> drop_Date       = $request->input('drop_date');
        $var -> drop_Time       = $request->input('drop_time');

        $var ->save();
        // dd('booking');
        return redirect('car-search');
    }
}
