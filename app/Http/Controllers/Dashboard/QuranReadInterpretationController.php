<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuranReadInterpretationController extends Controller
{



    public function index()
    {
        return view('Dashboard.QuranReadInterpretation.index');

    }

    public function create()
    {
        return view('Dashboard.QuranReadInterpretation.add');

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
