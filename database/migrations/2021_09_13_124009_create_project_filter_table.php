<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectFilterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_filters', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->index(['title','id']);
            $table->foreignId('project_id');
            $table->foreign('project_id','project_filters_project_id_foreign_key')
                ->references('id')
                ->on('projects')
                ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('project_filters');
    }
}
