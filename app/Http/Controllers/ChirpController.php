<?php

namespace App\Http\Controllers;

use App\Models\Chirp;

class ChirpController extends Controller
{
    public function create()
    {
        return view('chirps.create');
    }

    public function index()
    {
        // Get all chirps from the database
        $chirps = Chirp::all();

        return view('chirps.index', [
            'chirps' => $chirps
        ]);
    }

    public function store()
    {
        // Validate the request
        $validated = request()->validate([
            'message' => 'required|max:255'
        ]);

        // Store the chirp in the database
        $chirp = new Chirp();
        $chirp->message = $validated['message'];
        $chirp->save();

        return redirect()->route('chirps.index');
    }
}
