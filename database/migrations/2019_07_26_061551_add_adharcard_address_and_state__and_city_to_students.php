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
            Schema::table('students', function (Blueprint $table) {
                $table->string('adharcard_address')->nullable()->after('address');
                $table->string('state')->nullable()->after('adharcard_address');
                $table->string('city')->nullable()->after('state');
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
        Schema::table('students', function (Blueprint $table) {
            $table->dropColumn(['adharcard_address', 'state', 'city']);
        });
    
}
}