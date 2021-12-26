<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('sur_name', 255);
            $table->string('nick_name', 255);
            $table->string('full_name', 255);
            $table->string('title_job', 255);
            $table->text('summary')->nullable();
            $table->string('phone', 255);
            $table->string('whatsapp', 255);
            $table->string('email')->unique();
            $table->string('address', 255);
            $table->date('birth_date');
            $table->string('degree', 50);
            $table->integer('freelancer');
            $table->string('cover', 999)->nullable();
            $table->string('picture', 999)->nullable();
            $table->string('resume', 999)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('facebook', 255)->nullable();
            $table->string('twitter', 255)->nullable();
            $table->string('linkedin', 255)->nullable();
            $table->string('github', 255)->nullable();
            $table->string('youtube', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->integer('active')->default(1);
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('information');
    }
}
