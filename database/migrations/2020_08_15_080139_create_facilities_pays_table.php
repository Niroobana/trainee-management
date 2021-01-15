<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesPaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities_pays', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('program_id');
            $table->string('facilities_type');
            $table->double('sub_total');
            $table->double('discount');
            $table->double('total');
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
        Schema::dropIfExists('facilities_pays');
    }
}
