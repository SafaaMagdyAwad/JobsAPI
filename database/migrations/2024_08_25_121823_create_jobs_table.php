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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->string('responsability');
            $table->string('job_nature');
            $table->integer('like')->default(0);
            $table->integer('vacancy');
            $table->float('salary_from');
            $table->float('salary_to');
            $table->string('qualification');
            $table->date('date_line');
            $table->boolean('published');
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
        Schema::dropIfExists('jobs');
    }
};
