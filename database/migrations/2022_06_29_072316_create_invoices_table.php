<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->String('invoice_number');
            $table->date('invoice_date');
            $table->date('due_date');
            $table->String('product');
            $table->String('section');
            $table->String('discount');
            $table->String('rate_vat');
            $table->decimal('value_vat' , 8 ,2);
            $table->decimal('total' , 8 ,2);
            $table->String('status' , 50);
            $table->integer('value_status');
            $table->text('note')->nullable();
            $table->String('user');
            $table->softDeletes();
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
        Schema::dropIfExists('invoices');
    }
}
