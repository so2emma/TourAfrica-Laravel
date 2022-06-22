<?php

namespace App\Http\Controllers;
use App\Models\Destination;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index()
    {
        return view("pages.index");
    }
    public function booking()
    {
        return view("pages.booking");
    }
    public function destination()
    {
        $destinations = Destination::all();
        return view("pages.destination")->with('destinations',$destinations);
    }
    public function contact()
    {
        return view("pages.contact");
    }

    public function show($id)
    {
        return view("pages.show", [
            'destination'=>Destination::findOrFail($id)
        ]);
    }
    public function booking_tour()
    {
        return view('pages.booking-tour');
    }

}
