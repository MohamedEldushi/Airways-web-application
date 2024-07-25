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
        Schema::table('flights', function (Blueprint $table) {
            $table->decimal('price_economy', 8, 2)->default(0.00)->change();
             $table->decimal('price_business', 8, 2)->default(0.00)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->decimal('price_economy', 8, 2)->change();
            $table->decimal('price_business', 8, 2)->change();


        });
    }
};
