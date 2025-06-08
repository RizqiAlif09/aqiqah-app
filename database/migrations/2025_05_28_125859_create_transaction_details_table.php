<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid()->toString());
            $table->uuid('transaction_id');
            $table->uuid('package_id');
            $table->string('package_type'); // App\Models\AqiqahPackage atau App\Models\NasiBoxPackage
            $table->integer('quantity');
            $table->decimal('price', 12, 2);
            $table->decimal('subtotal', 12, 2);
            $table->timestamps();

            $table->foreign('transaction_id')
                  ->references('id')
                  ->on('transactions')
                  ->onDelete('cascade');
                  
            $table->index(['package_id', 'package_type']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
};