<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    // Show all loans
    public function index()
    {
        return view('loans.index', [
            'loans' => Loan::all(),
        ]);
    }

    // Show single loan
    public function show(Loan $loan)
    {
        return view('loans.show', [
            'loan' => $loan
        ]);
    }

    // show create form
    public function create()
    {
        return view('loans.create');
    }

    // Store Listing Data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'location' => 'required',
            'money' => 'required',
            'description' => 'required'
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Loan::create($formFields);

        return redirect('/');
    }

    // Delete Listing
    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect('/');
    }
}
