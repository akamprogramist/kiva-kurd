<?php

namespace App\Http\Controllers;

use App\Models\Buysell;
use Illuminate\Http\Request;

class BuysellController extends Controller
{
    // Show all buysells
    public function index()
    {
        return view('buysells.index', [
            'buysells' => Buysell::all()
        ]);
    }

    // Show single loan
    public function show(Buysell $buysell)
    {
        return view('buysells.show', [
            'buysell' => $buysell
        ]);
    }

    // show create form
    public function create()
    {
        return view('buysells.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'location' => 'required',
            'money' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Buysell::create($formFields);

        return redirect('/');
    }

    // Delete Listing
    public function destroy(Buysell $buysell)
    {
        $buysell->delete();
        return redirect('/');
    }
}
