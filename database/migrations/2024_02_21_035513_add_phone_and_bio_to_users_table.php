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
        Schema::table('users', function (Blueprint $table) {
            // add phone and bio columns to the users table
            $table->string('phone')->after('email')->nullable();
            $table->text('bio')->after('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // drop phone and bio columns from the users table
            $table->dropColumn('phone');
            $table->dropColumn('bio');
        });
    }
};
