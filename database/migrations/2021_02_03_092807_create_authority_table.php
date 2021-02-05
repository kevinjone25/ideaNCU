<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->boolean('CreatePost')->default(true);
            $table->boolean('ReadPost')->default(true);
            $table->boolean('UpdatePost')->default(true);
            $table->boolean('DeletePost')->default(true);
            $table->boolean('SuspendAccount')->default(false);
            $table->boolean('CreateAccount')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authorities');
    }
}
