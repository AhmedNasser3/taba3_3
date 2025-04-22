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
        Schema::create('print_services', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->enum('type', ['print', 'operator'])->nullable();
            $table->string('file')->nullable();
            $table->string('paper_size')->nullable();
            $table->string('paper_color')->nullable();
            $table->text('comment')->nullable();
            $table->enum('print_type', ['excel', 'pdf', 'word'])->nullable();
            $table->integer('paper_count')->nullable();
            $table->timestamp('dead_line')->nullable();
            $table->text('printer_id')->nullable();
            $table->enum('print_side', ['single', 'double'])->default('single')->nullable();
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending')->nullable();
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('print_services');
    }
};
