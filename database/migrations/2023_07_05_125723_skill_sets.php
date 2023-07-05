<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('skill_sets', function (Blueprint $table) {
            $table->id();
            $table-> foreign('candidate_id')->references('id')->on('candidates');
            $table-> foreign('skill_id')->references('id')->on('skills');
            $table->bigInteger('candidate_id')->unsigned() ;
            $table->bigInteger('skill_id')->unsigned();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
