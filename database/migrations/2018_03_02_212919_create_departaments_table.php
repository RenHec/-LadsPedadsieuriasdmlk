<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartamentsTable extends Migration
{

    public function up()
    {
        Schema::create('departaments', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name',50)->nullable();
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('departaments');
    }
}
