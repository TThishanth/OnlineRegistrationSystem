<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repeats', function (Blueprint $table) {
            $table->id();
            $table->integer('is_active')->default(0);
            $table->string('year');
            $table->string('semester');
            $table->string('regNo');
            $table->string('indexNo');
            $table->string('medium');
            $table->string('fullName');
            $table->longText('course')->nullable();
            $table->string('address');
            $table->string('addressEx');
            $table->integer('contactNo');
            $table->date('admissionDate')->nullable();
            $table->string('registered')->nullable();
            $table->date('paymentDate')->nullable();
            $table->mediumText('reasons');
            $table->string('amount');
            $table->date('amountPayDate')->nullable();
            $table->string('receiptNo');
            $table->string('photo_id')->index()->nullable();
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
        Schema::dropIfExists('repeats');
    }
}
