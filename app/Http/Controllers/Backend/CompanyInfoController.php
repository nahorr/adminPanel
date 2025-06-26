<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyInfo;
use Illuminate\Support\Facades\Storage;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

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
            'registration_number' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        CompanyInfo::create($data);

        return redirect()->route('admin.company.index')->with('success', 'Company info created successfully.');
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
        $companyinfo = CompanyInfo::where('id', $id)->first();

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
            'registration_number' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            if ($companyinfo->logo) {
                Storage::disk('public')->delete($companyinfo->logo);
            }

            $data['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $companyinfo->update($data);

        return redirect()->route('admin.company.index')->with('success', 'Company info updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $companyinfo = CompanyInfo::where('id', $id)->first();

        if ($companyinfo->logo) {
            Storage::disk('public')->delete($companyinfo->logo);
        }

        $companyinfo->delete();
        
        return redirect()->route('admin.company.index')->with('success', 'Company info deleted successfully.');
    }
}
