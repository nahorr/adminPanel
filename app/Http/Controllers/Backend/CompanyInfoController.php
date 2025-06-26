<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;

class CompanyInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = CompanyInfo::first();

        return view('backend.company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'alt_phone' => 'nullable|string|max:20',
            'website' => 'nullable|url',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'postal_code' => 'nullable|string|max:10',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'about' => 'nullable|string',
            'registration_number' => 'nullable|string',
            'tax_id' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        CompanyInfo::create($data);

        return redirect()->route('companyinfo.index')->with('success', 'Company info created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.company.show', compact('companyinfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.company.edit', compact('companyinfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'nullable|string|max:255',
            'logo' => 'nullable|image|max:2048',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:20',
            'alt_phone' => 'nullable|string|max:20',
            'website' => 'nullable|url',
            'address' => 'nullable|string',
            'city' => 'nullable|string',
            'state' => 'nullable|string',
            'country' => 'nullable|string',
            'postal_code' => 'nullable|string|max:10',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'instagram' => 'nullable|url',
            'about' => 'nullable|string',
            'registration_number' => 'nullable|string',
            'tax_id' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            if ($companyinfo->logo) {
                Storage::disk('public')->delete($companyinfo->logo);
            }

            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $companyinfo->update($data);

        return redirect()->route('companyinfo.index')->with('success', 'Company info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if ($companyinfo->logo) {
            Storage::disk('public')->delete($companyinfo->logo);
        }

        $companyinfo->delete();
        return redirect()->route('companyinfo.index')->with('success', 'Company info deleted successfully.');
    }
}
