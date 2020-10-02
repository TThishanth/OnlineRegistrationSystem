<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->integer('is_active')->default(0);
            $table->string('fullName');
            $table->string('name');
            $table->string('regNo');
            $table->mediumText('address');
            $table->integer('hNumber');
            $table->mediumText('presentAddress');
            $table->integer('pNumber');
            $table->mediumText('contactAddress');
            $table->integer('cNumber');
            $table->string('faculty')->nullable();
            $table->string('year')->nullable();
            $table->string('department');
            $table->string('studyProgramme');
            $table->longText('Fsemcourse')->nullable();
            $table->longText('Ssemcourse')->nullable();
            $table->string('Exyear');
            $table->string('indexNo');
            $table->string('Examination');
            $table->string('medium');
            $table->string('Results');
            $table->mediumText('pastExaminations');
            $table->string('amount');
            $table->date('amountPayDate')->nullable();
            $table->integer('receiptNo');
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
        Schema::dropIfExists('academics');
    }
}
