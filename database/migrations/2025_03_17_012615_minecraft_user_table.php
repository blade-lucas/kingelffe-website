<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('minecraftusers', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('username');
            $table->string('userType');
            $table->string('uuid');
        });
        DB::table('minecraftusers')->insert([
            'username' => 'KingElffe',
            'userType' => 'Owner',
            'uuid' => '94f7a4c0564f4dbf9b002afd63369753'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'JBMDeck',
            'userType' => 'Admin',
            'uuid' => 'a019e33c16c94f8a9699ed4c2c49bac7'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'PinkedDuck',
            'userType' => 'Admin',
            'uuid' => '9d2d5615c8814f0ea947cbf9bf449636'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'Sxgecraft',
            'userType' => 'Moderator',
            'uuid' => 'd5f664e2a7ec45a3bc517a3a9a363b9e'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'Utahraptorfun',
            'userType' => 'Moderator',
            'uuid' => '9abff83b5ad5499f8193f68dc2f24bcb'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'Bunbuntheevil',
            'userType' => 'Moderator',
            'uuid' => '72b1b7f136e648ee916eba3d0f4fd9a5'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'Meganne1221',
            'userType' => 'Moderator',
            'uuid' => 'ef2b2abbcbf1441993f90b13e47b0dea'
        ]);
        DB::table('minecraftusers')->insert([
            'username' => 'FROST_FROGGO',
            'userType' => 'Server Moderator',
            'uuid' => '7f85fd7e67a04728ada8f9acc7165fac'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('minecraftusers');
    }
};
