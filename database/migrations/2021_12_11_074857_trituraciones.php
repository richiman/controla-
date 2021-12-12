<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Trituraciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('trituraciones', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('costales');
          $table->string('kilos');
          $table->string('javas');
          $table->string('tiempo');
          $table->timestamp('created_at')->nullable();
          $table->timestamp('updated_at')->nullable();
      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
