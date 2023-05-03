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
        Schema::create('listing', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('location');
            $table->double('price');
            $table->integer('no_of_bedrooms');
            $table->integer('no_of_bathrooms');
            $table->integer('area');
            $table->integer('discount');
            $table->integer('mini_investment');
            $table->integer('estimate');
            $table->string('super_builtup_area'); 
            $table->string('developer');
            $table->string('project');
            $table->string('status');
            $table->string('broucher');
            $table->integer('price_breakup');
            $table->date('possession_date');
            $table->date('booking_date');
            $table->integer('rera_id');
            $table->string('address')->nullable();
            $table->string('payment_structure');
            $table->string('attached_title');
            $table->bigInteger('address_description');
            $table->string('address_file')->nullable();
            $table->string('featured_image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing');
    }
};
