<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // id (auto increment)
            $table->unsignedBigInteger('user_id'); // user_id (admin atau regular user)
            $table->string('title', 100); // title
            $table->text('content'); // content
            $table->string('category', 50); // category
            $table->string('image', 100); // image
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP')); // date
            $table->string('status', 10); // status
            $table->timestamps(); // created_at dan updated_at
        });

        Schema::table('posts', function (Blueprint $table) {
            // Foreign key untuk user_id dari tabel users
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
        Schema::dropIfExists('posts');
    }
}
