<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('position');
            $table->string('address_unit');
            $table->string('address_street');
            $table->string('address_city');
            $table->string('address_province');
            $table->string('address_postal_code');
            $table->string('phone_number_main');
            $table->string('phone_number_cell');
            $table->string('phone_number_text');
            $table->string('phone_number_preferred');
            $table->string('email_addresses');
            $table->string('emergency_contacts_name');
            $table->string('emergency_contacts_phone_number_main');
            $table->string('emergency_contacts_phone_number_cell');
            $table->string('emergency_contacts_email');
            $table->string('emergency_contacts_text');
            $table->string('emergency_contacts_preferred');
	        $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('employees');
    }
}
