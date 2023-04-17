<?php
namespace App\Repositories;

interface PatientExamRepository extends BaseRepository{
    public function getByChart(int $chartId);
}