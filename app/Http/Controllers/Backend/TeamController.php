<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver; // or Imagick

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::latest()->paginate(10);

        return view('backend.team.index', compact('teams'));
    }

    public function create()
    {
        return view('backend.team.create');
    }

    public function store(Request $request)
    {
        $validated = $this->validateForm($request);

        // normalize booleans/defaults
        $validated = $this->validateForm($request);
        $validated['is_active']  = $request->boolean('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            $validated['image_path'] = $this->processImage($request->file('image'));
        }

        Team::create($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team created successfully.');
    }


    public function edit($id)
    {
        $team = Team::findOrFail($id);

        return view('backend.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);
        $validated = $this->validateForm($request);
        $validated['is_active']  = $request->boolean('is_active');
        $validated['sort_order'] = $validated['sort_order'] ?? 0;

        if ($request->hasFile('image')) {
            if ($team->image_path) {
                Storage::disk('public')->delete($team->image_path);
            }
            $validated['image_path'] = $this->processImage($request->file('image'));
        }

        $team->update($validated);

        return redirect()->route('admin.team.index')->with('success', 'Team updated successfully.');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image_path && Storage::disk('public')->exists($team->image_path)) {
            Storage::disk('public')->delete($team->image_path);
        }

        $team->delete();

        return redirect()->route('admin.team.index')->with('success', 'Team deleted successfully.');
    }

    private function validateForm(Request $request): array
    {
        return $request->validate([
            'name'       => ['required','string','max:150'],
            'position'   => ['nullable','string','max:150'],
            'about'      => ['nullable','string'],
            'sort_order' => ['nullable','integer','min:0'],
            'is_active'  => ['nullable','boolean'],
            'image'      => ['nullable','image','mimes:jpg,jpeg,png,webp','max:51200'], // allow up to 50MB
        ]);
    }

    // --- helper ---
    private function processImage($file, int $size = 800): string
    {
        $filename = Str::uuid().'.webp';
        $manager  = new ImageManager(new Driver());

        // Center-crop to a perfect square, then compress to WebP
        $img = $manager->read($file->getPathname())
                    ->cover($size, $size)  // crop+resize to exactly $size x $size
                    ->toWebp(82);          // good quality/size balance

        Storage::disk('public')->put("teams/{$filename}", (string) $img);
        return "teams/{$filename}";
    }
}
