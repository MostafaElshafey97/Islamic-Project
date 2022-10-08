<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FatawaController extends Controller
{



    public function index()
    {
        return view('Dashboard.Fatawa.index');

    }

    public function create()
    {
        return view('Dashboard.Fatawa.add');

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
