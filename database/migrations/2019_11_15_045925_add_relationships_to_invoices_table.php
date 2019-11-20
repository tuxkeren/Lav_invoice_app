<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsToInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoices', function (Blueprint $table) {
            $table->foreign('customer_id')
                ->references('id')->on('customers')
                ->onDelete('cascade'); //CASCADE berarti apabila data induk berubah maka data anak juga akan berubah
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('invoices', function (Blueprint $table) {
            //
        });
    }
}
