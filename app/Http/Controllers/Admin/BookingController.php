<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Booking;

class BookingController extends Controller
{
    public function index()
    {
        $query = Booking::join('booking_details', 'booking_details.booking_id', '=', 'bookings.id')
                        ->where('status', '!=', 'fail')
                        ->get();

        $data['data'] = $query;
        $data['title'] = 'Manage Booking';
        return view('admin.booking.index', $data);
    }

    public function detail($id)
    {
        $query = Booking::select(
                            'bookings.id',
                            'bookings.booking_code',
                            'booking_details.booking_date'
                        )
                        ->join('booking_details', 'booking_details.booking_id', '=', 'bookings.id')
                        ->where('status', '!=', 'fail')
                        ->where('bookings.id', $id)
                        ->first();

        $data['data'] = $query;
        $data['title'] = 'Detail Data Booking';
        return view('admin.booking.show', $data);
    }
}
