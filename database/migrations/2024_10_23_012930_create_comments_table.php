<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // id (auto increment)
            $table->unsignedBigInteger('post_id'); // post_id
            $table->unsignedBigInteger('user_id'); // user_id (admin atau regular user)
            $table->string('user_name', 50); // user_name
            $table->text('comment'); // comment
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP')); // date
            $table->timestamps(); // created_at dan updated_at
        });

        Schema::table('comments', function (Blueprint $table) {
            // Foreign key untuk post_id dan user_id
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
