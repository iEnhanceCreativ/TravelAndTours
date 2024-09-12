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
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('duffel_id'); // Use auto-incrementing integer for primary key
            $table->string('city_name')->nullable();
            $table->string('icao_code', 4)->nullable(); // ICAO codes are typically 4 characters long
            $table->string('iata_city_code', 3)->nullable(); // IATA city code (3 characters) and nullable
            $table->string('iata_country_code', 2)->nullable(); // Country code (ISO 3166-1 alpha-2, 2 characters)
            $table->string('iata_code', 3)->nullable(); // IATA code (3 characters)
            $table->decimal('latitude', 10, 7)->nullable(); // Latitude with precision and scale
            $table->decimal('longitude', 10, 7)->nullable(); // Longitude with precision and scale
            $table->string('city')->nullable(); // Nullable city name
            $table->string('time_zone')->nullable(); // Time zone string
            $table->string('name'); // Airport name
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
