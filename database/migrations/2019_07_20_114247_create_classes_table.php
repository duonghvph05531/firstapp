<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->timestamps(); //Nguyen Van A
            $table->string('name')->nullable(); // Nguyen Thi B
            $table->string('teacher_name')->nullable(); //CNTT
            $table->string('major')->nullable(); //
            $table->integer('max_student')->default(40);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
        
    }
}
