<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->renameColumn('name', 'first_name');
            $table->string('last_name');
            $table->string('father_name');
            $table->string('cnic_no');
            $table->string('mobile_no');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('country_id');
            $table->string('state_id');
            $table->string('city_id');
            $table->string('address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
