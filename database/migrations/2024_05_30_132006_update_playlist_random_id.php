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
        if ( !Schema::hasColumn( 'playlists', 'random_order' ) ) {
            Schema::table( 'playlists', function ( Blueprint $table ) {
                $table->integer('random_order')->nullable()->after('song');
            } );
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         if (Schema::hasColumn( 'playlists', 'random_order' ) ) {
            Schema::table( 'playlists', function ( Blueprint $table ) {
                $table->dropColumn('random_order');
            } );
        }
    }
};
