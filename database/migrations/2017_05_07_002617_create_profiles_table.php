<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
//            $table->foreign('user_id')
//                        ->references('id')
//                        ->on('agencies')
//                        ->onDelete('cascade');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('business_url');
            $table->string('company_name');
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
         Schema::dropIfExists('profiles');
    }
}
