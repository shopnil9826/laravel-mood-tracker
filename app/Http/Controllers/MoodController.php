<?php

namespace App\Http\Controllers;

use App\Models\Mood;
use Illuminate\Http\Request;

class MoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $moods = Mood::all();

        return view('moods.index')
            ->with('moods', $moods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('moods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
      $moodData = $request->validate([
        'name' => 'required|string',
        'color' => 'required|string',
      ]);

      Mood::create($moodData);

      return redirect()->route('entries.mood')
        ->with('success', 'Mood created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Mood $mood)
    {
        return view('moods.show')
            ->with('mood', $mood);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Mood $mood)
    {
      return view('moods.edit')->with('mood', $mood);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Mood $mood)
    {
        $updatedMood = $request->validate([
            'name' => 'required|string',
            'color' => 'required|string',
        ]);

        $mood->update($updatedMood);

        return redirect()->route('moods.show', $mood)
            ->with('success', 'Mood updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mood  $mood
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Mood $mood)
    {
        $mood->delete();

        return redirect()->route('moods.index')
            ->with('success', 'Mood deleted.');
    }
}
