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
        Schema::create('email_group', function (Blueprint $table) {
            $table->id();
            $table->string('list_user');
            // $table->string('2sd_user')->nullable();
            // $table->string('3rd_user')->nullable();
            // $table->string('4th_user')->nullable();
            // $table->string('5th_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('email_group');
    }
};
