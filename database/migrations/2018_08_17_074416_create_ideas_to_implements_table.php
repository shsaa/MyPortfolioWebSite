<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdeasToImplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ideas_to_implements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('UserIdentity');
            $table->string('Title');
            $table->mediumText('Details');
            $table->dateTime('DateAdded');
            $table->dateTime('LastUpdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ideas_to_implements');
    }
}
