<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableBooking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 150);
            $table->string('phone_number', 50);
            $table->string('email', 50);
            $table->integer('bank_id');
            $table->text('address');
            $table->text('receipt_image');
            $table->text('id_card_image');
            $table->text('npwp_card_image');
            $table->text('family_card_image');
            $table->text('married_card_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
