<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEnigneCapacityToSellCarLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sell_car_leads', function (Blueprint $table) {
            $table->text('make')->nullable();
            $table->text('CylinderCapacity')->nullable();
            $table->text('euroStatus')->nullable();
            $table->text('registration')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sell_car_leads', function (Blueprint $table) {
            //
        });
    }
}
