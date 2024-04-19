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
        {
            Schema::create('experiences', function (Blueprint $table) {
                $table->id();
                $table->string('titre');
                $table->string('prenom');
                $table->text('site_name');
                $table->string('activity');
                $table->text('message');
                $table->date('date');
                $table->string('commune');
                $table->string('departement');
                $table->text('description');
                $table->text('analyse');
                $table->text('materiel');
                $table->text('humain');
                $table->boolean('is_published')->default('0');
                $table->timestamp('submission_date')->useCurrent();
                $table->timestamps();
            });
        }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
