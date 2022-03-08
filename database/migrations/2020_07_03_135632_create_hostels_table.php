<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostels', function (Blueprint $table) {
            $table->id();
            $table->integer('is_active')->default(0);
            $table->string('fullName');
            $table->string('name');
            $table->string('regNo');
            $table->string('sex')->nullable();
            $table->mediumText('address');
            $table->mediumText('presentAddress');
            $table->integer('contactNo');
            $table->string('registered')->nullable();
            $table->date('paymentDate')->nullable();
            $table->string('faculty')->nullable();
            $table->string('year')->nullable();
            $table->string('department');
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
        Schema::dropIfExists('hostels');
    }
}
