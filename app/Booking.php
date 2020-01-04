<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
   protected $fillable = [
    'full_name', 
    'phone_number', 
    'email', 
    'bank_id', 
    'address', 
    'receipt_image', 
    'id_card_image', 
    'npwp_card_image', 
    'family_card_image', 
    'married_card_image' 
   ];

   // public function bank()
   // {
   //      return $this->belongsTo('App\Bank', 'bank_id');
   // }
}
