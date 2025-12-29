<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gym;

class GymController extends Controller
{
    public function index()
    {
        $gyms = Gym::latest()->paginate(10);

        return view('gyms.index', compact('gyms'));
    }
    public function show($slug)
    {
        $gym = Gym::where('slug', $slug)->firstOrFail();

        return view('gyms.show', compact('gym'));
    }
}
