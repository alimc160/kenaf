<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCreatedByInProjectFiltersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_filters', function (Blueprint $table) {
            $table->foreignId('created_by');
            $table->foreign('created_by','project_filters_created_by_foreign_key')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_filters', function (Blueprint $table) {
            $table->dropIfExists('created_by');
        });
    }
}
