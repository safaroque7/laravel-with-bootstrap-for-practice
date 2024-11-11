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
           $table->string('sub_title')->nullable();
           $table->string('caption')->nullable(); 
           $table->string('excerpt')->nullable(); 
           $table->boolean('comments')->required()->default(1); 
           $table->string('summary')->required()->default(1); 
           $table->string('allow_comments')->default(1); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
