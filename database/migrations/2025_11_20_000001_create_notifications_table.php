<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration {
    public function up(){
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('appointment_id')->nullable();
            $table->enum('channel', ['email','sms'])->default('email');
            $table->string('to')->nullable();
            $table->text('message');
            $table->enum('status', ['pending','sent','failed'])->default('pending');
            $table->timestamp('scheduled_at')->nullable();
            $table->timestamp('sent_at')->nullable();
            $table->timestamps();
        });
    }
    public function down(){
        Schema::dropIfExists('notifications');
    }
}
