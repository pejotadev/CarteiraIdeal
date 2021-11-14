<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('bill_id')->comment('Identificador da conta');
            $table->foreignId('user_id')->comment('Identificador de usuario na carteira');
            $table->decimal('in_debt', $precision = 14, $scale = 2)->comment('Valor à pagamento');
            $table->decimal('amount_paid', $precision = 14, $scale = 2)->comment('Valor pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_owners');
    }
}
