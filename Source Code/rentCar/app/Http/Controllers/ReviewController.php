<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        //Get customer and product id
        $customer_id = session('loginUser')['id'];
        $vehicle_id  = $request->id;
        $request->validate([
            'comment' => 'required',
        ]);
        //test
        // $quality = $request->get('quality');
        // dd($quality);
        $review = new Review();
        $review->customer_id = $customer_id;
        $review->vehicle_id  = $vehicle_id;
        $review->comment     = $request->get('comment');
        $review->quality     = $request->get('quality');
        $review->price       = $request->get('price');
        $review->comfort     = $request->get('comfort');
        $review->driving     = $request->get('driving');
        $review->save();

        return redirect('/singleCar/' . $vehicle_id);
    }
}
// php artisan make:migration add_price_columns_to_reviews_table --table=reviews
