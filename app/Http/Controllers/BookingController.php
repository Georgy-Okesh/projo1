<?php

namespace App\Http\Controllers;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Booking;
class BookingController extends Controller
{
    public function create(){
        return view('Booking.create');
    }

    public function store(Request $request){
       $this->validate($request,[
            'name'=>'required',
            'idno'=>'required',
            'Kra_pin'=>'required',
            'user_ID'=>'required',
            'pick_date' => 'required',
            'return_date' => 'required',
       ]);
             // Create Post
             $booking = new Booking;
             $booking->name = $request->input('name');
             $booking->idno = $request->input('idno');
             $booking->Kra_pin = $request->input('Kra_pin');
             $booking->user_ID = $request->input('user_ID');
             $booking->pick_date = $request->input('pick_date');
             $booking->pick_location = $request->input('pick_location');
             $booking->return_date = $request->input('return_date');
             $booking->return_location= $request->input('return_location');
             $booking->save();
             Alert::success('Success Title', 'Success Message');

             return redirect('/product')->with('success', 'Booked');;            

}
}