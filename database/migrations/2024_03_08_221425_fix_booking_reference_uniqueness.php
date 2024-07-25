<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FixBookingReferenceUniqueness extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Generate unique booking references for existing bookings with duplicate or empty references
        $bookings = DB::table('bookings')->get();

        foreach ($bookings as $booking) {
            // Skip if the booking reference is already set and unique
            if (!empty($booking->booking_reference)) {
                continue;
            }

            // Generate a unique booking reference
            do {
                $uniqueReference = Str::upper(Str::random(6)); // Adjust the length and characters as needed
            } while (DB::table('bookings')->where('booking_reference', $uniqueReference)->exists());

            // Update the booking with the new unique reference
            DB::table('bookings')->where('id', $booking->id)->update(['booking_reference' => $uniqueReference]);
        }

        // Now we can safely apply the unique constraint to the booking_reference column
        Schema::table('bookings', function (Blueprint $table) {
            $table->string('booking_reference')->unique()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropUnique(['booking_reference']);
        });
    }
}
