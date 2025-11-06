<?php

// database/migrations/xxxx_create_job_requests_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('job_requests', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('address');
            $table->string('postalcode');
            $table->string('phone');
            $table->string('job');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::dropIfExists('job_requests');
    }
};
