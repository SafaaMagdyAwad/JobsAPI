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
        Schema::create('job_data', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->text('description');
            $table->text('responsability');
            $table->enum('job_nature',['Full Time','Part Time']);
            $table->integer('like')->default(0);
            $table->integer('vacancy');
            $table->float('salary_from');
            $table->float('salary_to');
            $table->text('qualification');
            $table->date('date_line');
            $table->boolean('published')->default(0);
            $table->foreignId('category_id')->constrained('categories');
            $table->foreignId('company_id')->constrained('companies');
            $table->foreignId('location_id')->constrained('locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_data');
    }
};
