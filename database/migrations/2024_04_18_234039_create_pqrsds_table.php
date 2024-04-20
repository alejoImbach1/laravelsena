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
        Schema::create('pqrsds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client')->nullable();
            $table->boolean('is_anonymous');
            $table->enum('type_pqrsd',['p','q','r','s','d']);
            $table->text('description');
            $table->string('url_pdf');
            $table->enum('state',['enviado','en_proceso','resuelto'])->nullable();
            $table->timestamps();
            $table->foreign('id_client')->references('id')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pqrsds');
    }
};
