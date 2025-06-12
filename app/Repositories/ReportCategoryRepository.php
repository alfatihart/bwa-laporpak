<?php

namespace App\Repositories;

use App\Interfaces\ReportCategoryRepositoryInterface;
use App\Models\ReportCategory;
use App\Models\User;

class ReportCategoryRepository implements ReportCategoryRepositoryInterface
{
    public function getAllReportCategories()
    {
        // Logic to retrieve all residents
        return ReportCategory::all();
    }

    public function getReportCategoryById(int $id)
    {
        // Logic to retrieve a resident by ID
        return ReportCategory::where('id', $id)->first();
    }

    public function createReportCategory(array $data)
    {
        // Logic to create a new resident
        return ReportCategory::create($data);
    }

    public function updateReportCategory(array $data, int $id)
    {
        // Logic to update an existing resident
        $reportCategory = $this->getReportCategoryById($id);

        return $reportCategory->update($data);
    }

    public function deleteReportCategory(int $id)
    {
        // Logic to delete a resident
        $reportCategory = $this->getReportCategoryById($id);

        return $reportCategory->delete();
    }
}
