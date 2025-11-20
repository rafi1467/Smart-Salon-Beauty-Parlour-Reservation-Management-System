<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration {
    public function up(){
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('service_id');
            $table->unsignedBigInteger('staff_id')->nullable();
            $table->date('date');
            $table->time('time');
            $table->enum('status', ['booked','cancelled','completed','rescheduled'])->default('booked');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('appointments');
    }
}
