<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEntityIdColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pivot_project_fltr_fltr_atr_entity',function (Blueprint $table){
            $table->foreignId('entity_id')->nullable();
            $table->foreign('entity_id')->references('id')
                ->on('entities')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pivot_project_fltr_fltr_atr_entity',function (Blueprint $table){
           $table->dropColumn("entity_id");
        });
    }
}
