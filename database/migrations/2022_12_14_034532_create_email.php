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
        Schema::create('email', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 100);
            $table->string('content');
            // $table->string('list_cc');
            $table->string('resources_id');

            $table->dateTime('time_send');
            // $table->integer('email_group_id');
            // $table->integer('sender_status');
            // $table->integer('recver_status');

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email');
    }
};
