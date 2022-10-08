<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuranTextInterpretationController extends Controller
{



    public function index()
    {
        return view('Dashboard.QuranTextInterpretation.index');

    }

    public function create()
    {
        return view('Dashboard.QuranTextInterpretation.add');

    }

    public function edit($id)
    {

     
        return view('Dashboard.Ayat.edit');

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
