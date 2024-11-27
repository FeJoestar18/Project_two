<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('plan_id');
            $table->string('status');
            $table->string('description');
            $table->float('price');
            $table->string('image');
            $table->timestamps();
            $table->date('start_date');
            $table->date('end_date')->nullable();

            // Chaves estrangeiras
        $table->foreign('user_id')->references('id')->on('users');
        $table->foreign('plan_id')->references('id')->on('plans');
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
