<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id(); // id (auto increment)
            $table->unsignedBigInteger('user_id'); // user_id (admin atau regular user)
            $table->unsignedBigInteger('post_id'); // post_id
            $table->timestamps(); // created_at dan updated_at
        });

        Schema::table('likes', function (Blueprint $table) {
            // Foreign key untuk user_id dan post_id
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
