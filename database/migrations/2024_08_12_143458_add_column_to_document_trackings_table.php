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
        Schema::table('document_trackings', function (Blueprint $table) {
            $table->text('note')->nullable(); // Add the 'note' column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('document_trackings', function (Blueprint $table) {
            $table->dropColumn('note'); // Remove the 'note' column if rolling back
        });
    }
};



