<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        // Create the 'users' table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID column
            $table->string('name'); // Name column
            $table->string('email')->unique(); // Email column with unique constraint
            $table->string('phone_number')->unique(); // Phone number column with unique constraint
            $table->string('gender'); // Gender column
            $table->string('address'); // Address column
            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    public function down()
    {
        // Drop the 'users' table if it exists
        Schema::dropIfExists('users');
    }
}