<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_details', function (Blueprint $table) {
            $table->foreign('invoice_id')
                ->references('id')->on('invoices')
                ->onDelete('cascade');
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoice_details', function (Blueprint $table) {
            //
        });
    }
}
