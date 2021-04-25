<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTotalDeDiasToRentaClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('renta_clientes', function (Blueprint $table) {
            $table->decimal('Total_de_Dias')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renta_clientes', function (Blueprint $table) {
            $table->dropColumn('Total_de_Dias');
        });
    }
}
