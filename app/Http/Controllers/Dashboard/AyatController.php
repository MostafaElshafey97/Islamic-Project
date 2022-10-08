<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AyatController extends Controller
{



    public function index()
    {
        return view('Dashboard.Ayat.index');

    }

    public function create()
    {
        return view('Dashboard.Ayat.add');

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
