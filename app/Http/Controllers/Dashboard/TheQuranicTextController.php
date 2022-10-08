<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TheQuranicTextController extends Controller
{



    public function index()
    {
        return view('Dashboard.TheQuranicText.index');

    }

    public function create()
    {
        return view('Dashboard.TheQuranicText.add');

    }

    public function store(Request $request)
    {
    }


    public function update(Request $request)
    {
    }


    public function destroy(Request $request)
    {
    }
}
