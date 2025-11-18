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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();

            // Foreign key for customer/user
            $table->unsignedBigInteger('user_id');

            // Service details
            $table->string('service_name');
            $table->decimal('service_price', 8, 2);

            // Booking date & time
            $table->date('booking_date');
            $table->time('booking_time');

            // Payment & invoice
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');
            $table->string('invoice_number')->unique();

            // Loyalty points earned
            $table->integer('loyalty_points_earned')->default(0);

            $table->timestamps();

            // Foreign key constraint (User table)
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
