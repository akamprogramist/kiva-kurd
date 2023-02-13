<?php

namespace App\Http\Controllers;

use App\Models\Invest;
use Illuminate\Http\Request;

class InvestController extends Controller
{
    // Show all invests
    public function index()
    {
        return view('invests.index', [
            'invests' => Invest::all()
        ]);
    }

    // Show single loan
    public function show(Invest $invest)
    {
        return view('invests.show', [
            'invest' => $invest
        ]);
    }

    // show create form
    public function create()
    {
        return view('invests.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'location' => 'required',
            'shares' => 'required',
            'money' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Invest::create($formFields);

        return redirect('/');
    }

    // Delete Listing
    public function destroy(Invest $invest)
    {
        $invest->delete();
        return redirect('/');
    }
}
