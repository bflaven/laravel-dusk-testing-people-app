<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            // create table 'people'        
            Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname',255);
            $table->string('email',255);
            $table->string('username',100);
            $table->text('bio');
            $table->date('dob');
            $table->text('address');
            $table->string('city',100)->nullable();
            $table->string('country',100)->nullable();
            $table->timestamps(); // timestamps() creates created_at & updated_at fields  
            });   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
