<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Booking;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function store_contact(Request $request)
    {
        $validated = $request->validate([
        'firstname'=> 'required|min:3',
        'lastname'=> 'required|min:3',
        'email'=> 'required|email:rfc,dns',
        'phone'=> 'required|regex:/[0][0-9]/|digits:11',
        'message'=> 'required|min:10',
        ]);

        $contact = Contact::create($validated);

        $request->session()->flash('status', 'Thanks for reaching out to us');

        return redirect('/contact');

    }

    public function store_booking(Request $request)
    {
        $validated = $request->validate([
        'firstname'=> 'required|min:3',
        'lastname'=> 'required|min:3',
        'email'=> 'required|email:rfc,dns',
        'phone'=> 'required|regex:/[0][0-9]/|digits:11',
        'address'=> 'required|min:10',
        'date'=> 'required|date',
        'number'=> 'required|min:1',
        'package'=> 'required|min:4',
        ]);

        $contact = Booking::create($validated);

        $request->session()->flash('status', 'Thanks for Booking enjoy your tour');

        return redirect('/booking/tour');

    }
}
