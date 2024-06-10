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
        Schema::create('cust__adresses', function (Blueprint $table) {
            $table->id();
            $table->string('cust_name');
            $table->integer('cust_phne');
            $table->string('cust_landmark');
            $table->string('cust_city');
            $table->string('cust_addr_type');
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
        Schema::dropIfExists('cust__adresses');
    }
};
