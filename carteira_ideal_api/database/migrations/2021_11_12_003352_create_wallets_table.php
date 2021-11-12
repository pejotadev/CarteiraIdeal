<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->integer('id', true)->comment('Identificador da carteira');
            $table->string('name')->nullable()->index('name')->comment('Identificação da carteira');
            $table->dateTime('created_at')->useCurrent()->comment('Data de criacao do registro');
            $table->integer('created_by')->nullable()->comment('Usuario que criou o registro');
            $table->dateTime('updated_at')->nullable()->comment('Data de atualizacao do registro');
            $table->integer('updated_by')->nullable()->comment('Usuario que atualizou o registro');
            $table->enum('oculto', ['S', 'N'])->default('N')->comment('Flag que indica se o registro esta oculto ou nao');
            $table->enum('status', ['0', '1'])->default('1')->comment('Situacao do registro (soft delete)');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
