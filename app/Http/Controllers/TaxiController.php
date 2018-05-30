<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\TaxiBooked;

class TaxiController extends Controller
{
    //

    public function booking(Request $request){

        Mail::to('danilogacevic.pg@gmail.com')->send(new TaxiBooked($request->all()));

        return redirect()->back();

    }
}
