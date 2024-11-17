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
        Schema::create('client_base_serivces', function (Blueprint $table) {
            $table->id();
            $table->string('domain_name')->required();
            $table->string('service_names')->nullable();
            $table->string('domain_provider')->nullable();
            $table->string('hosting_provider')->nullable();
            $table->float('hosting_size')->nullable();
            $table->date('registration_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_base_serivces');
    }
};
