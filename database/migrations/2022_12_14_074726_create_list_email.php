<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_email', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            // $table->string('list_mail_id');
            $table->dateTime('time_send')->nullable();
            $table->dateTime('time_read')->nullable();
            $table->bigInteger('mail_id');
            $table->string('role', 15);  // send, recv or user cc, user recv cc
            $table->string('user_send');
            $table->string('user_recv');
            $table->string('user_cc');
            $table->string('user_recv_cc');
            // $table->boolan('is_cc');
            // $table->bigInteger('group_mail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('list_email');
    }
};
