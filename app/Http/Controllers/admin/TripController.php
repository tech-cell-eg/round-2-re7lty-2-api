<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trip;
use App\Http\Requests\TripRequest;
use Illuminate\Support\Facades\Storage;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trips = Trip::paginate(10);
        return view('admin.trips.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.trips.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('trips', 'public');
        }

        Trip::create($validated);

        return redirect()->route('admin.trips.index')->with('success', 'Trip added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.trips.edit', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trip = Trip::find($id);

        if (!$trip) {
            return redirect()->route('admin.trips.index')->with('error', 'Trip not found.');
        }

        return view('admin.trips.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TripRequest $request, string $id)
    {
        $trip = Trip::find($id);

        if (!$trip) {
            return redirect()->route('admin.trips.index')->with('error', 'Trip not found.');
        }

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($trip->image) {
                Storage::disk('public')->delete($trip->image);
            }
            $validated['image'] = $request->file('image')->store('trips', 'public');
        }

        $trip->update($validated);

        return redirect()->route('admin.trips.index')->with('success', 'Trip updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trip = Trip::find($id);

        if (!$trip) {
            return redirect()->route('admin.trips.index')->with('error', 'Trip not found.');
        }

        // Delete image if exists
        if ($trip->image) {
            Storage::disk('public')->delete($trip->image);
        }

        $trip->delete();

        return redirect()->route('admin.trips.index')->with('success', 'Trip deleted successfully!');
    }

}
