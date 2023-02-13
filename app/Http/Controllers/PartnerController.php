<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    // Show all partners
    public function index()
    {
        return view('partners.index', [
            'partners' => Partner::all(),
        ]);
    }

    // Show single partner
    public function show(Partner $partner)
    {
        return view('partners.show', [
            'partner' => $partner
        ]);
    }

    // show create form
    public function create()
    {
        return view('partners.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'department' => 'required',
            'location' => 'required',
            'employees' => 'required',
            'products' => 'required',
            'clients' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Partner::create($formFields);

        return redirect('/');
    }

    // Delete Listing
    public function destroy(Partner $partner)
    {
        $partner->delete();
        return redirect('/');
    }
}
