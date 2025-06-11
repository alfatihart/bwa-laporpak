<?php

namespace App\Repositories;

use App\Interfaces\ResidentRepositoryInterface;
use App\Models\Resident;
use App\Models\User;

class ResidentRepository implements ResidentRepositoryInterface
{
    public function getAllResidents()
    {
        // Logic to retrieve all residents
        return Resident::all();
    }

    public function getResidentById(int $id)
    {
        // Logic to retrieve a resident by ID
        return Resident::where('id', $id)->first();
    }

    public function createResident(array $data)
    {
        // Logic to create a new resident
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        return $user->resident()->create($data);
    }

    public function updateResident(array $data, int $id)
    {
        // Logic to update an existing resident
        $resident = $this->getResidentById($id);

        $resident->user->update([
            'name' => $data['name'],
            'password' => isset($data['password']) ? bcrypt($data['password']) : $resident->user->password,
        ]);

        return $resident->update($data);
    }

    public function deleteResident(int $id)
    {
        // Logic to delete a resident
        $resident = $this->getResidentById($id);

        $resident->user->delete();

        return $resident->delete();
    }
}
