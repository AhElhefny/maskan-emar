<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{

    public function up()
    {

        Schema::create('teams', function (Blueprint $table) {

            $table->id();
            $table->string('name_ar');
            $table->string('name_en');
            $table->text('description_ar')->nullable();
            $table->text('description_en')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->string('facebook')->nullable();
            $table->string('phone')->nullable();
            $table->text('job_ar')->nullable();
            $table->text('job_en')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
