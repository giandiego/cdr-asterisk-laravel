<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdrsTable extends Migration
{
    public function up()
    {
        Schema::create('cdrs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->datetime('calldate')->nullable();
            $table->string('clid')->nullable();
            $table->string('src')->nullable();
            $table->string('dst')->nullable();
            $table->string('dcontext')->nullable();
            $table->string('channel')->nullable();
            $table->string('dstchannel')->nullable();
            $table->string('lastapp')->nullable();
            $table->string('lastdata')->nullable();
            $table->integer('duration')->nullable();
            $table->integer('billsec')->nullable();
            $table->string('disposition')->nullable();
            $table->integer('amaflags')->nullable();
            $table->string('accountcode')->nullable();
            $table->string('uniqueid')->nullable();
            $table->string('userfield')->nullable();
            $table->string('peeraccount')->nullable();
            $table->string('linkedid')->nullable();
            $table->integer('sequence')->nullable();
            $table->timestamps();
        });
    }
}
