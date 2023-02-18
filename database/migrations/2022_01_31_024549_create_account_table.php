<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('account_owner');
            $table->string('account_name');
            $table->string('account_type');
            $table->biginteger('account_number')->unsigned();
            $table->string('status');
            $table->string('rating');
            $table->biginteger('phone_number');
            $table->string('ownership');
            $table->integer('SIC_code');
            $table->string('modified_by');
            $table->integer('current_balance');
            $table->date('due_date');
            $table->integer('amount_past_due');
            $table->integer('unbilled_charges');
            $table->string('arrangements_pending');
            $table->string('address');
            $table->integer('pin');
            $table->date('DOB');
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
        Schema::dropIfExists('accounts');
    }
};
