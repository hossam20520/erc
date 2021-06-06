<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredsTable extends Migration
{
    public function up()
    {
        Schema::create('registereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
