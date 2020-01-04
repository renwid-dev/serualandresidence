<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        $request->validate([
            'full_name'              => '',
            'phone_number'           => '',
            'email'                  => '',
            'bank_id'                => '',
            'address'                => '',
            'receipt_image'          => '',
            'id_card_image'          => '',
            'npwp_card_image'        => '',
            'family_card_image'      => '',
            'married_card_image'     => ''
        ]);

        $receipt = (!empty($request->receipt_image)) ? $request->receipt_image : '';

        Booking::create([
            'full_name'              => $request->full_name,
            'phone_number'           => $request->phone_number,
            'email'                  => $request->email,
            'bank_id'                => $request->bank_id,
            'address'                => $request->address,
            'receipt_image'          => $receipt,
            'id_card_image'          => $request->id_card_image,
            'npwp_card_image'        => $request->npwp_card_image,
            'family_card_image'      => $request->family_card_image,
            'married_card_image'     => $request->married_card_image
        ]);
        // dd($request);
        if($request->ajax()){
            return response()->json(['message' => 'Message send successfully.']);
        }
        return redirect('dashboard/booking/list');

    }
}
