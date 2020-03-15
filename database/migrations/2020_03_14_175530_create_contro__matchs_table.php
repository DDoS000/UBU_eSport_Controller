<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contro__matchs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('TeamA');
            $table->string('TeamB');
            $table->string('scoret1');
            $table->string('scoret2');
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
        Schema::dropIfExists('contro__matchs');
    }
}
