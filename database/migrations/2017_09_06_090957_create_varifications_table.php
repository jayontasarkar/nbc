<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVarificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('varifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libraby_name');
            $table->string('vill');
            $table->string('post_code');
            $table->string('upozila');
            $table->string('divison');
            $table->string('lib_foundtaion_year');
            $table->text('lib_description');
            $table->text('asset_description');
            $table->string('no_of_books');
            $table->string('visitors_per_day');
            $table->string('no_of_newspapers');
            $table->string('opening_time');
            $table->string('opening_days_week');
            $table->tinyInteger('committee');
            $table->string('libarian_name');
            $table->string('libarian_qualification');
            $table->string('chairman_name');
            $table->string('chairman_mobile');
            $table->text('comments');
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
        Schema::dropIfExists('varifications');
    }
}
