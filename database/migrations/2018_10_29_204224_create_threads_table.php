<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThreadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tags')) {
            Schema::create('threads', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('author_id');
                $table->string('title');
                $table->text('body');
                $table->integer('status')->default(0);
                $table->integer('comment_count')->default(0);
                $table->dateTime('published_at')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threads');
    }
}
