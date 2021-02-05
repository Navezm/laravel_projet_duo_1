<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nav_footers', function (Blueprint $table) {
            $table->id();
            $table->string('title', 30);
            $table->string('link', 50);
            $table->string('icon', 100);
            $table->string('copyright', 100);
            $table->string('credits', 100);
            $table->string('linbkB', 100);
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
        Schema::dropIfExists('nav_footers');
    }
}
