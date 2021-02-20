<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tourismuser_id');
            $table->foreignId('tourismcategory_id');
            $table->string('title');
            $table->longtext('description');
            $table->string('image');
            $table->timestamps();
            $table->foreign('tourismuser_id')->references('id')->on('users')->ondelete('cascade')->onUpdate('cascade');
            $table->foreign('tourismcategory_id')->references('id')->on('categories')->ondelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
