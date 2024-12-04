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
        Schema::table('posts', function (Blueprint $table) {
            // Drop the column if it exists first
            if (Schema::hasColumn('posts', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
    
            // Now add it
            $table->unsignedBigInteger('user_id')->after('body');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    
};
