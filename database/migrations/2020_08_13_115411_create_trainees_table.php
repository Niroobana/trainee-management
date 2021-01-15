
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTraineesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::create('trainees', function (Blueprint $table) {
            $table->id();
            $table->string('first_Name');
            $table->string('last_Name');
            $table->enum('gender',['Male','Female'])->default('Male');
            $table->string('NIC');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('designation');
            $table->string('address');
            $table->string('department');
           $table->string('category')->nullable();
            $table->string('mobile_no');
            $table->rememberToken();
            $table->timestamps();



        }));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainees');
    }
}
