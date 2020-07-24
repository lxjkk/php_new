<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBolgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolgs_table', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('content');
            $table->integer('like');
            $table->integer('collect');
            $table->longText('content_title');
            $table->longText('content_subhead');
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
        Schema::dropIfExists('bolgs_table');
    }
}
