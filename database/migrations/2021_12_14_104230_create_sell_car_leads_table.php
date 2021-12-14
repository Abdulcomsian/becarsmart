<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellCarLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_car_leads', function (Blueprint $table) {
            $table->id();

            $table->string('model_no')->nullable();
            $table->string('color')->nullable();
            $table->string('engine')->nullable();
            $table->string('mileage')->nullable();
            $table->string('title')->nullable();

            $table->string('fullname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('service_history')->nullable();
            $table->tinyInteger('non_runner')->default(0);
            $table->tinyInteger('set_of_keys')->default(1);
            $table->integer('mot_due')->nullable();
            $table->text('comments')->nullable();

            $table->string('gearbox_condition')->nullable();
            $table->tinyInteger('warning_light')->default(0);
            $table->tinyInteger('scratches')->default(0);



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
        Schema::dropIfExists('sell_car_leads');
    }
}
