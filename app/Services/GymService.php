<?php

namespace App\Services;

use App\Repositories\GymRepository;
use App\Models\Gym;

class GymService
{
    protected GymRepository $gymRepository;

    public function __construct(GymRepository $gymRepository)
    {
        $this->gymRepository = $gymRepository;
    }

  
    public function listGyms(int $perPage = 12)
    {
        return $this->gymRepository->getAll($perPage);
    }


    public function showGym(string $slug): Gym
    {
        return $this->gymRepository->findBySlug($slug);
    }

    public function createGym(array $data): Gym
    {
        return $this->gymRepository->create($data);
    }

   
    public function updateGym(Gym $gym, array $data): Gym
    {
        return $this->gymRepository->update($gym, $data);
    }

 
    public function deleteGym(Gym $gym): bool
    {
        return $this->gymRepository->delete($gym);
    }
}
