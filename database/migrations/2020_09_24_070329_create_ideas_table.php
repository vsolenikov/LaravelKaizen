<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasTable extends Migration
{
    /**
     * ������ ��������
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name');
	        $table->string('mail');
	        $table->string('phone');
    	    $table->string('idea');
    	    $table->string('image')->nullable();
            $table->timestamps();

        });
    }

    /**
     * �������� ��������
     *
     * @return void
     *
     */
    public function down()
    {
        Schema::drop('ideas');
    }
}
