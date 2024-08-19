<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $profiles = Profile::all();

        
        return view('profile.list', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('profile.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'bio' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

        
        Profile::create($validatedData);

        
        return redirect()->route('profile.index')->with('success', 'Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $profile = Profile::findOrFail($id);

        
        return view('profile.view', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
        $profile = Profile::findOrFail($id);

      
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
        $validatedData = $request->validate([
            'bio' => 'required|string|max:255',
            'website' => 'required|string|max:255',
            'location' => 'required|string|max:255',
        ]);

    
        $profile = Profile::findOrFail($id);
        $profile->update($validatedData);

   
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
     
        $profile = Profile::findOrFail($id);
        $profile->delete();

     
        return redirect()->route('profile.index')->with('success', 'Profile deleted successfully.');
    }

    public function showWithTodos(string $id)
    {
        $profile = Profile::with('user.todos')->findOrFail($id);

        return view('profile.todos', compact('profile'));
    }
}
