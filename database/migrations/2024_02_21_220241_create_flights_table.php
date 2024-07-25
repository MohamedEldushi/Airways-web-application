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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('flight_number');
            $table->unsignedBigInteger('departure_airport_id');
            $table->unsignedBigInteger('arrival_airport_id');
            // Set the current timestamp as the default value
$table->timestamp('departure_time')->useCurrent();
$table->timestamp('arrival_time')->useCurrent();


            // $table->decimal('price_economy');
            $table->decimal('price_economy', 8, 2)->default(0.00);
            $table->decimal('price_business', 8, 2)->default(0.00);
            // $table->decimal('price_business');
            $table->string('status');
            $table->timestamps();

            $table->foreign('departure_airport_id')->references('id')->on('locations');
            $table->foreign('arrival_airport_id')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
