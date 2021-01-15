<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longtext('permission')->nullable();
            $table->timestamps();


        });
        DB::table('roles')->insert(['id' => 1, 'name' => 'Admin']);
        DB::table('roles')->insert(['id' => 2, 'name' => 'Coordinator']);
        DB::table('roles')->insert(['id' => 3, 'name' => 'Resource']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
