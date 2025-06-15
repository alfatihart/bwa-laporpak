<?php

namespace App\Repositories;

use App\Interfaces\ReportStatusRepositoryInterface;
use App\Models\ReportStatus;

class ReportStatusRepository implements ReportStatusRepositoryInterface
{
    public function getAllReportStatuses()
    {
        // Logic to retrieve all residents
        return ReportStatus::all();
    }

    public function getReportStatusById(int $id)
    {
        // Logic to retrieve a resident by ID
        return ReportStatus::where('id', $id)->first();
    }

    public function createReportStatus(array $data)
    {
        // Logic to create a new resident
        return ReportStatus::create($data);
    }

    public function updateReportStatus(array $data, int $id)
    {
        // Logic to update an existing resident
        $report = $this->getReportStatusById($id);

        return $report->update($data);
    }

    public function deleteReportStatus(int $id)
    {
        // Logic to delete a resident
        $report = $this->getReportStatusById($id);

        return $report->delete();
    }
}
