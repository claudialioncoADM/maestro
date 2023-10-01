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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();                           // integer id
            $table->string('assunto');              // assunto varchar (125)  $table->string('assunto',20); define tamanho
            $table->string('email');                // email varchar (125)
            $table->text('mensagem')->nullable();   // mensagem text
            $table->timestamps();                   // create_at, update_at (datas de criação e modificação)
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
