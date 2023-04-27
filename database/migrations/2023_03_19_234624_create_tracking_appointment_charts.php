<?php

use App\Models\VitalSignsMeasurement;
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
        Schema::create('tracking_appointment_charts', function (Blueprint $table) {
            $table->id();
            
            $table->enum('type', ['Médica', 'De Enfermagem']);

            $table->date('date');

            $table->text('schema');

            $table->text('evolution');

            $table->text('conduct');

            $table->foreignId('patient_id')
                ->constrained()
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignId('vital_signs_measurement_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete()
                ->restrictOnUpdate();

            $table->bigInteger('appointment_id');

            $table->string('appointment_type');

            
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
        Schema::dropIfExists('tracking_appointment_chart');
    }
};
