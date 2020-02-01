<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\User;
use App\Booking;
use Carbon\Carbon;
use App\BookingDetail;
use App\Notifications\BookingNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class BookingController extends Controller
{
    public function booking(Request $request)
    {
        $user = Auth::user();
        $receipt = ($request->file('receipt_image')) ? Storage::put('booking', $request->file('receipt_image')) : '';
        $idCard = ($request->file('id_card_image')) ? Storage::put('booking', $request->file('id_card_image')) : '';
        $npwpCard = ($request->file('npwp_card_image')) ? Storage::put('booking', $request->file('npwp_card_image')) : '';
        $familyCard = ($request->file('family_card_image')) ? Storage::put('booking', $request->file('family_card_image')) : '';
        $marriedCard = ($request->file('married_card_image')) ? Storage::put('booking', $request->file('married_card_image')) : '';

        DB::beginTransaction();
        try {
            $booking = Booking::create([
                'full_name'              => $request->full_name,
                'phone_number'           => $request->phone_number,
                'email'                  => $request->email,
                'address'                => $request->address,
                'receipt_image'          => $receipt,
                'id_card_image'          => $idCard,
                'npwp_card_image'        => $npwpCard,
                'family_card_image'      => $familyCard,
                'married_card_image'     => $marriedCard,
                'booking_code'           => 'MP'.'-'.date('Ymd').'-'.mt_rand(100000, 999999),
                'status'                 => 'waiting',
                'user_id'                => $user->id
            ]);

            $detail = BookingDetail::create([
                'booking_id'            => $booking->id,
                'booking_date'          => Carbon::now(),
                'product_id'            => 0,
                'booking_down_payment'  => 0
            ]);
            DB::commit();
            $user = $this->sendEmail($request, $user);
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
        return redirect('dashboard/booking/list');
    }

    public function sendEmail($request, $user)
    {
        $user = User::where('id', $user->id)->first();
        $user->notify(new BookingNotification($request));
    }
}
