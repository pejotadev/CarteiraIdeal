<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->integer('id', true)->comment('Identificador');
            $table->foreignId('wallet_id')->comment('Identificador da carteira');
            $table->string('name')->nullable()->index('name')->comment('Identificação da conta');
            $table->string('description')->nullable()->index('description')->comment('Descrição da conta');
            $table->decimal('amount', $precision = 14, $scale = 2)->comment('Valor de pagamento');
            $table->decimal('amount_paid', $precision = 14, $scale = 2)->comment('Valor pago');
            $table->enum('type', ['debt', 'credt'])->comment('Data de pagamento');
            $table->dateTime('payment_date')->useCurrent()->comment('Data de pagamento');
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
        Schema::dropIfExists('bills');
    }
}
