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
        Schema::create('vital_signs_measurements', function (Blueprint $table) {
            $table->id();

            $table->string('pa_mmhg', 15);
            $table->string('fc_bpm', 15);
            $table->string('fr_irpm', 15);
            $table->string('tax_celsius', 15);
            $table->string('oxygen_saturation_percentage');
            $table->date('measurement_date');
            $table->foreignId('patient_id')
                ->constrained()
                ->nullOnDelete()
                ->cascadeOnUpdate();

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
        Schema::dropIfExists('vital_signs_measurements');
    }
};
