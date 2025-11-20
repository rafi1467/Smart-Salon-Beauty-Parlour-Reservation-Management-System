<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemindersTable extends Migration {
    public function up(){
        Schema::create('reminders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('appointment_id');
            $table->timestamp('remind_at');
            $table->boolean('sent')->default(false);
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('reminders');
    }
}
