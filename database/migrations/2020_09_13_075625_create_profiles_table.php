<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('overview')->nullable();
            $table->string('english_proficiency')->nullable();
            $table->string('experience_level')->nullable();
            $table->string('professional_title')->nullable();
            $table->string('education')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('avatar')->nullable();
            $table->string('skills')->nullable();
            $table->unsignedBigInteger('user_id');
    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
