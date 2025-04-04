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
        Schema::create('subs', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('username');
            $table->integer('sub_tier')->default(1);
            $table->date('sub_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('subs');
    }
};
