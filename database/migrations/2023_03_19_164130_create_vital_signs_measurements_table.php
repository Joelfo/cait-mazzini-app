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

            $table->text('pa_mmhg');
            $table->text('fc_bpm');
            $table->text('fr_irpm');
            $table->text('tax_celsius');
            $table->text('oxygen_saturation_percentage');
            $table->text('weight_kg');
            $table->text('height_m');
            $table->datetime('measurement_date_time');

            $table->foreignId('patient_id')
                ->constrained()
                ->cascadeOnDelete()
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
