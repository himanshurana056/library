<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdharcardAddressAndStateAndCityToStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        {
            Schema::table('students',function (Blueprint $table) {
                $table->string('adharcard_address')->after('address');
                $table->string('state')->after('adharcard_address');
                $table->string('city')->after('state');
                $table->tinyInteger('status')->after('city');
            });
        }
    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students',function (Blueprint $table) {
            $table->dropColumn(['adharcard_address','state','city','status']);
        });
    
}
}