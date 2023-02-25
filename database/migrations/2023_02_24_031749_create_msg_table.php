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
        Schema::create('msg', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('acc_id');
            $table->foreign('acc_id')->references('id')->on('account');
            $table->string('added_by');
            $table->string('remarks');
            $table->timestamp('time')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('msg');
    }
};
