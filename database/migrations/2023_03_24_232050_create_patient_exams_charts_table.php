<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_exams_charts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_exam_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            //polymorphic relationship
            $table->bigInteger('chart_id');
            $table->string('chart_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_exams_charts');
    }
};
