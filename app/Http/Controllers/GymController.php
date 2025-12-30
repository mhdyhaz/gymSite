<?php

namespace App\Http\Controllers;
use App\Http\Requests\GymRequest;
use App\Services\GymService;

class GymController extends Controller
{
    protected GymService $gymService;

    public function __construct(GymService $gymService)
    {
        $this->gymService = $gymService;
    }

    public function index()
    {
        $gyms = $this->gymService->listGyms();

        return view('gyms.index', compact('gyms'));
    }

    public function show(GymRequest $request)
    {
        $gym = $this->gymService->showGym($request->slug);

        return view('gyms.show', compact('gym'));
    }
}
