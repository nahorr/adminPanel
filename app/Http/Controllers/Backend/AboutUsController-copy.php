<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use App\Models\AboutUs;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = CompanyInfo::first();

        $about = AboutUs::first();

        return view('backend.about-us.index', compact('company','about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $this->validateForm($request);

        $about = new AboutUs($validated);
        $this->handleUploads($request, $about);
        $about->save();

        return redirect()->back()->with('success', 'About Us information created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $about = AboutUs::findOrFail($id);
        $validated = $this->validateForm($request);
        
        $about->fill($validated);
        $this->handleUploads($request, $about, true);
        $about->save();

        return redirect()->back()->with('success', 'About Us information updated successfully.');
    }

    private function validateForm(Request $request)
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'mission' => 'nullable|string',
            'vision' => 'nullable|string',
            'values' => 'nullable|string',
            'history' => 'nullable|string',
            'content' => 'nullable|string',
            'banner_image' => 'nullable|image|max:2048',
            'about_image' => 'nullable|image|max:2048',
            'team_images.*' => 'nullable|image|max:2048',
        ]);
    }

    private function handleUploads(Request $request, AboutUs $about, $isUpdate = false)
    {
        if ($request->hasFile('banner_image')) {
            if ($isUpdate && $about->banner_image) {
                Storage::delete('public/' . $about->banner_image);
            }
            $about->banner_image = $request->file('banner_image')->store('about', 'public');
        }

        if ($request->hasFile('about_image')) {
            if ($isUpdate && $about->about_image) {
                Storage::delete('public/' . $about->about_image);
            }
            $about->about_image = $request->file('about_image')->store('about', 'public');
        }

        if ($request->hasFile('team_images')) {
            if ($isUpdate && $about->team_images) {
                foreach (json_decode($about->team_images) as $img) {
                    Storage::delete('public/' . $img);
                }
            }

            $uploaded = [];
            foreach ($request->file('team_images') as $file) {
                $uploaded[] = $file->store('about/team', 'public');
            }
            $about->team_images = json_encode($uploaded);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
