<?php

namespace App\Repositories;

use App\Models\Gym;
use Illuminate\Pagination\LengthAwarePaginator;

class GymRepository
{
   
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Gym::query()
            ->where('is_active', true)
            ->latest()
            ->paginate($perPage);
    }

  
    public function findBySlug(string $slug)
    {
        return Gym::where('slug', $slug)->firstOrFail();
    }

  
    public function create(array $data)
    {
        return Gym::create($data);
    }

 
    public function update(Gym $gym, array $data)
    {
        $gym->update($data);
        return $gym;
    }

    public function delete(Gym $gym)
    {
        return (bool) $gym->delete();
    }
}
