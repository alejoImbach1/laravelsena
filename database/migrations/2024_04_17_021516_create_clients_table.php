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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->enum('type_person',['n','j','a','na']);
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('first_surname');
            $table->string('second_surname')->nullable();
            $table->enum('id_type',['cc','ti','ce','nit']);
            $table->string('id_number');
            $table->date('birthday')->nullable();
            $table->enum('gender',['m','f','o'])->nullable();
            $table->char('address',255)->nullable();
            $table->string('email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
