<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Social;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socials = Social::get();

        return view('backend.socials.index',compact('socials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'required|string|max:100',
            'url' => 'required|url|max:255',
            'icon_class' => 'nullable|string|max:100',
            'is_active' => 'required|boolean',
        ]);
    
        Social::create($validated);
    
        return redirect()
            ->route('admin.socials.index')
            ->with('success', 'Social link added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $social = Social::where('id',$id)->first();

        return view('backend.socials.edit',compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $social = Social::where('id',$id)->first();

        $validated = $request->validate([
            'platform' => 'required|string|max:100',
            'url' => 'required|url|max:255',
            'icon_class' => 'nullable|string|max:100',
            'is_active' => 'required|boolean',
        ]);
    
        $social->update($validated);
    
        return redirect()
            ->route('admin.socials.index')
            ->with('success', 'Social link updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $social = Social::where('id',$id)->first();

        $social->delete();
        
        return redirect()
            ->route('admin.socials.index')
            ->with('success', 'Social link deleted successfully.');
    }
}
