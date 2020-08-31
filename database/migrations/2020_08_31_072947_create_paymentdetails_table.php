<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentdetails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payment_id')
            ->references('id')
            ->on('payments')
            ->onDelete('cascade'); 

             $table->foreignId('student_id')
            ->references('id')
            ->on('students')
            ->onDelete('cascade');  

             $table->foreignId('staff_id')
            ->references('id')
            ->on('staffs')
            ->onDelete('cascade');
            $table->string('voucher_no');
            $table->date('payment_date');
            $table->string('paid_amount');  
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
        Schema::dropIfExists('paymentdetails');
    }
}
