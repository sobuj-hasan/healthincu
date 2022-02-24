<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billings', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('street_address')->nullable();
            $table->string('apartment_address')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('town')->nullable();
            $table->string('city')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('email')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('billings');
    }
}
