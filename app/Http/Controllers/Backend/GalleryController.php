<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::latest()->paginate(20);

        return view('backend.gallery.index', compact('gallery'));
    }

    public function create()
    {
        return view('backend.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|max:2048',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        foreach ($request->file('images') as $image) {
            $path = $image->store('gallery', 'public');

            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_path' => $path,
            ]);
        }

        return redirect()->route('admin.gallery.index')->with('success', 'Images uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::where('id',$id)->first();

        $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($gallery->image_path && Storage::disk('public')->exists($gallery->image_path)) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            $gallery->image_path = $request->file('image')->store('gallery', 'public');
        }
        
        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $gallery->image_path,
        ]);
        

        $gallery->update([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $gallery->image_path,
        ]);

        return back()->with('success', 'Image updated successfully.');
    }


    public function destroy(Gallery $gallery)
    {
        Storage::disk('public')->delete($gallery->image_path);
        $gallery->delete();
        return back()->with('success', 'Image deleted.');
    }

    // Optional: implement edit/update if needed
}

