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
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->text('description');

            $table->string('address');
            $table->string('access_info')->nullable();

            $table->string('price_range');
            $table->string('working_hours');

            $table->boolean('is_affordable')->default(true);

            $table->string('meta_title');
            $table->string('meta_description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};
