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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('sus_card', 15);
            $table->string('rg', 15)->unique();
            $table->string('cpf', 11)->unique();
            $table->date('admission_date');
            $table->enum('type', ['TB', 'PNT', 'Quimioprofilaxia']);
            $table->enum('arrival', ['Encaminhado', 'Referenciado', 'Demanda Espontanea']);
            $table->string('telephone_1', 14);
            $table->string('telephone_2', 14)->nullable();
            $table->string('cep', 8);
            $table->tinyInteger('pregnant');
            $table->date('birth_date');
            $table->string('record_code', 10);
            $table->string('mother_name', 255);
            $table->string('address', 255);
            $table->foreignId('health_unity_id')
                ->nullable()
                ->constrained('health_unities')
                ->nullOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('district_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('nationality_id')
                ->constrained()
                ->restrictOnDelete()
                ->cascadeOnUpdate();
            $table->foreignId('birthplace_id')
                ->constrained('cities')
                ->restrictOnDelete()
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
        Schema::dropIfExists('patients');
    }
};
