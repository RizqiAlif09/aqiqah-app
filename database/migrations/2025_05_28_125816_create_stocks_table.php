<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
       Schema::create('stocks', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid()->toString());
            $table->uuid('package_id');
            $table->string('package_type'); // App\Models\AqiqahPackage atau App\Models\NasiBoxPackage
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('initial_stock');
            $table->integer('remaining_stock');
            $table->timestamps();

            $table->index(['package_id', 'package_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};
