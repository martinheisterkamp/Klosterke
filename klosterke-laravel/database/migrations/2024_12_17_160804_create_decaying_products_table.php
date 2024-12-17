<?php

use App\Models\Supplier;
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
        Schema::create('decaying_products', function (Blueprint $table) {
            $table->uuid();
            $table->timestamps();
            $table->integer("expires_in_days");
            $table->integer("quality");
            $table->foreignIdFor(Supplier::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('decaying_products');
    }
};
