<?php

namespace App\Repositories;

use App\Interfaces\ReportRepositoryInterface;
use App\Models\Report;
use App\Models\User;

class ReportRepository implements ReportRepositoryInterface
{
    public function getAllReports()
    {
        // Logic to retrieve all residents
        return Report::all();
    }

    public function getReportById(int $id)
    {
        // Logic to retrieve a resident by ID
        return Report::where('id', $id)->first();
    }

    public function createReport(array $data)
    {
        // Logic to create a new resident
        return Report::create($data);
    }

    public function updateReport(array $data, int $id)
    {
        // Logic to update an existing resident
        $report = $this->getReportById($id);

        return $report->update($data);
    }

    public function deleteReport(int $id)
    {
        // Logic to delete a resident
        $report = $this->getReportById($id);

        return $report->delete();
    }
}
