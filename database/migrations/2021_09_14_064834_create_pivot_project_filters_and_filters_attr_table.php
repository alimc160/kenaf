<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivotProjectFiltersAndFiltersAttrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivot_project_fltr_fltr_atr_entity', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filters_attr_id')->nullable();
            $table->foreign('filters_attr_id','filters_attr_foreign_key')->references('id')->on('filters_attr')->onDelete('cascade');

            $table->foreignId('project_filters_id');
            $table->foreign('project_filters_id','project_filters_foreign_key')
                ->references('id')->on('project_filters')->onDelete('cascade');

            $table->foreignId('created_by')->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('pivot_project_filters_and_filters_attr');
    }
}
