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
        Schema::create('wiki', function (Blueprint $table){
            $table->id()->autoIncrement();
            $table->string('wiki_category');
            $table->string('wiki_name');
            $table->string('wiki_route');
        });

        DB::table('wiki')->insert([
            'wiki_category' => "serverInfo",
            'wiki_name' => "Welcome",
            'wiki_route' => "/wiki/welcome"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "serverInfo",
            'wiki_name' => "About The Server",
            'wiki_route' => "/wiki/about-the-server"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "serverInfo",
            'wiki_name' => "Rules",
            'wiki_route' => "/wiki/rules"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "serverInfo",
            'wiki_name' => "Plugins",
            'wiki_route' => "/wiki/plugins"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "serverInfo",
            'wiki_name' => "Support",
            'wiki_route' => "/wiki/support"
        ]);

        //Plugins
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Overview",
            'wiki_route' => "/wiki/plugins-overview"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "EssentialsX",
            'wiki_route' => "/wiki/essentialsx"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Ez Chest Shop",
            'wiki_route' => "/wiki/ez-chest-shop"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Vanilla Tweaks",
            'wiki_route' => "/wiki/vanilla-tweaks"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "xClaim",
            'wiki_route' => "/wiki/xclaim"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Geyser",
            'wiki_route' => "/wiki/geyser"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Moderation",
            'wiki_route' => "/wiki/moderation"
        ]);

        //Commands
        DB::table('wiki')->insert([
            'wiki_category' => "commands",
            'wiki_name' => "Basic Commands",
            'wiki_route' => "/wiki/basic-commands"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "commands",
            'wiki_name' => "Economy Commands",
            'wiki_route' => "/wiki/economy-commands"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "plugins",
            'wiki_name' => "Support Commands",
            'wiki_route' => "/wiki/support-commands"
        ]);

        //Tutorials
        DB::table('wiki')->insert([
            'wiki_category' => "tutorials",
            'wiki_name' => "Joining The Server",
            'wiki_route' => "/wiki/how-to-join"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "tutorials",
            'wiki_name' => "Land Claims",
            'wiki_route' => "/wiki/land-claims"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "tutorials",
            'wiki_name' => "Making a Shop",
            'wiki_route' => "/wiki/making-a-shop"
        ]);
        DB::table('wiki')->insert([
            'wiki_category' => "tutorials",
            'wiki_name' => "Getting Server Roles",
            'wiki_route' => "/wiki/getting-server-roles"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('wiki');
    }
};
