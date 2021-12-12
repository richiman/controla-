<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cartones extends Migration
{
  public $timestamps = false;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cartones', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('secos');
          $table->string('dobladas');
          $table->string('total');
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
