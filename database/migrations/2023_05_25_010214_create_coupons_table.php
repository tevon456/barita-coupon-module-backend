<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->bigIncrements('coupon_id');
            $table->text('isin_code')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->dateTime('record_date')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
            $table->integer('status_id')->nullable();
            $table->foreign('status_id')->references('status_id')->on('status_codes');
            $table->foreign('isin_code')->references('isin_code')->on('securities');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coupons');
    }
};
