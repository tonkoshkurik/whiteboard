<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dashboards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('agency_id');
//            $table->foreign('agency_id')
//              ->references('id')
//              ->on('agencies')
//              ->onDelete('cascade');
            $table->string('logo_url')->nullable();
            $table->string('logo_path')->nullable();
            $table->string('name')->nullable();
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
      // WTF
       Schema::dropIfExists('dashboards');
    }
}
