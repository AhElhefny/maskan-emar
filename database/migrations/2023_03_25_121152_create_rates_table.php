<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    

    
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->id();
            $table->string('name_ar')->default();
            $table->string('name_en')->default();
            $table->string('image')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('rates');
    }
}
