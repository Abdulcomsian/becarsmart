<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowItWorkSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('how_it_work_sections', function (Blueprint $table) {
            $table->id();
            $table->string('header')->nullable();
            $table->string('sub_header')->nullable();
            $table->string('file')->nullable();
            $table->string('title')->nullable();
            $table->string('exceed')->nullable();
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
        Schema::dropIfExists('how_it_work_sections');
    }
}
