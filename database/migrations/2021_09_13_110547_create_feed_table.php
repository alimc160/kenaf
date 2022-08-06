<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            $table->index(['id','author']);
            $table->longText('title');
            $table->longText('body')->change();
            $table->longText('description')->nullable();
            $table->longText('image')->nullable();
            $table->string('author')->nullable();
            $table->string('lang')->nullable();
            $table->longText('body')->nullable();
            $table->longText('body_html')->nullable();
            $table->longText('url')->nullable();
            $table->longText('src')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('feed');
    }
}
