<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CustAddress', function (Blueprint $table) {
            $table->id();
            $table->integer('cust_id');
            $table->string('name');
            $table->integer('phne_num');
            $table->string('landmark');
            $table->string('city');
            $table->string('addr_type');
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
        Schema::dropIfExists('cust_addresses');
    }
};
