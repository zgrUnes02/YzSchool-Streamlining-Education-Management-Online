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
        Schema::create('my_parents', function (Blueprint $table) {

            $table->id();
            $table->string('Email')->unique();
            $table->string('Password');

            // Father Informations Here : ------------------------------
            $table->string('Name_Father');

            $table->string('National_ID_Father');
            $table->string('Passport_ID_Father');

            $table->string('Phone_Father');
            $table->string('Job_Father');

            $table->bigInteger('Nationality_Father_id')->unsigned();
            $table->bigInteger('Blood_Type_Father_id')->unsigned();
            $table->bigInteger('Religion_Father_id')->unsigned();

            $table->string('Address_Father');

            // Mother Informations Here : ------------------------------
            $table->string('Name_Mother');

            $table->string('National_ID_Mother');
            $table->string('Passport_ID_Mother');

            $table->string('Phone_Mother');
            $table->string('Job_Mother');

            $table->bigInteger('Nationality_Mother_id')->unsigned();
            $table->bigInteger('Blood_Type_Mother_id')->unsigned();
            $table->bigInteger('Religion_Mother_id')->unsigned();
            
            $table->string('Address_Mother');

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
        Schema::dropIfExists('my_parents');
    }
};
