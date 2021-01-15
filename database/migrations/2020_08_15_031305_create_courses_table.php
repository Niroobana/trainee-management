<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->enum('duration',['one_day','two_days','three_days','four_days','five_days','ten_days','one_month','two_months','three_months'])->default('one_day');
            $table->enum('course_type',['diploma','certificate'])->default('diploma');
            $table->enum('target_group',['management_asst','development_officers','ogs','drivers','technical_officers','specific_groups'])->default('management_asst');
            $table->string('description');
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
        Schema::dropIfExists('courses');
    }
}
