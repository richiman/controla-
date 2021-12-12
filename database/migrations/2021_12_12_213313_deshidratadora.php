<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Deshidratadora extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('deshidratadora', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('tipo');
          $table->string('cantidad');
          $table->string('kilos');
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
