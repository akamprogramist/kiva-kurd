<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Invest;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    // Show all datas
    public function index()
    {
        $loan = Loan::All();
        $invest = Invest::All();
        return view('landing', ['loans' => $loan, 'invests' => $invest]);
    }
}
