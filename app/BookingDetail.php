<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
   protected $fillable = [
       'product_id',
       'booking_id',
       'booking_date',
       'booking_down_payment'
   ];

   public function booking()
   {
        return $this->belongsTo('App\Booking', 'booking_id');
   }
   public function user()
   {
      return $this->belongsTo(User::class);
   }
}
