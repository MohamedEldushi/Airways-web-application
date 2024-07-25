<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        // Schema::create('bookings', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('user_id');
        //     $table->unsignedBigInteger('flight_id');
        //     $table->string('class'); // Consider if you need to normalize this into a separate table or keep as is
        //     $table->string('status');
        //     $table->string('payment_status');
        //     $table->date('booking_date');
        //     // $table->unsignedBigInteger('return_flight_id')->nullable()->after('booking_date');
        //     // Adding contact information
        //     $table->string('email')->nullable(); // For storing passenger's email
        //     $table->string('country_code')->nullable(); // For storing passenger's phone country code
        //     $table->string('phone_number')->nullable(); // For storing passenger's phone number
        //     $table->timestamps();

        //     // $table->foreign('return_flight_id')->references('id')->on('flights');
        //     $table->foreign('user_id')->references('id')->on('users');
        //     // $table->foreign('flight_id')->references('id')->on('flights');

        //     $table->unsignedBigInteger('departure_flight_id')->after('user_id');
        //     $table->foreign('departure_flight_id')->references('id')->on('flights');

        //     // Ensure return_flight_id is also correctly set up if it isn't already
        //     $table->unsignedBigInteger('return_flight_id')->nullable()->after('departure_flight_id');
        //     $table->foreign('return_flight_id')->references('id')->on('flights')->onDelete('set null');
        // });

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('departure_class');
            $table->string('return_class')->nullable();
            $table->decimal('departure_price', 10, 2); // New column for departure flight price
            $table->decimal('return_price', 10, 2)->nullable(); // New column for return flight price, nullable since return flight is optional
            $table->string('status');
            $table->string('payment_status');
            $table->date('booking_date');
            $table->string('email')->nullable();
            $table->string('country_code')->nullable();
            $table->string('phone_number')->nullable();
            $table->unsignedBigInteger('departure_flight_id');
            $table->foreign('departure_flight_id')->references('id')->on('flights');
            $table->unsignedBigInteger('return_flight_id')->nullable();
            $table->foreign('return_flight_id')->references('id')->on('flights')->onDelete('set null');
            $table->timestamps();

            $table->string('booking_reference')->unique();

        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
