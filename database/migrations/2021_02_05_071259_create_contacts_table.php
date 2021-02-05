<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('title1',30);
            $table->string('p',1000);
            $table->string('icon',30);
            $table->string('subtitle',30);
            $table->string('info1',150);
            $table->string('info2',150);
            $table->string('loading',50);
            $table->string('sent',100);
            $table->string('btn',30);
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
        Schema::dropIfExists('contacts');
    }
}
