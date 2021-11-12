<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_owners', function (Blueprint $table) {
            $table->integer('id', true)->comment('Identificador');
            $table->foreignId('wallet_id')->comment('Identificador da carteira');
            $table->foreignId('user_id')->comment('Identificador de usuario na carteira');
            $table->dateTime('created_at')->useCurrent()->comment('Data de criacao do registro');
            $table->integer('created_by')->nullable()->comment('Usuario que criou o registro');
            $table->dateTime('updated_at')->nullable()->comment('Data de atualizacao do registro');
            $table->integer('updated_by')->nullable()->comment('Usuario que atualizou o registro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_owners');
    }
}
