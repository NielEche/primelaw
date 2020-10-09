<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function attorneys()
    {
        return view('pages.attorneys');
    }

    public function experiences()
    {
        return view('pages.experiences');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function appointment()
    {
        return view('pages.appointment');
    }


    public function practiceArea()
    {
        return view('pages.practiceArea');
    }

    public function CompanyInvestmentLaws()
    {
        return view('pages.practiceAreas.company-investment-laws');
    }

    public function OilandGas()
    {
        return view('pages.practiceAreas.oil-and-gas');
    }
}
