<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConversationController extends Controller
{



    public function index()
    {
        return view('Dashboard.Conversation.index');

    }

    public function create()
    {
        return view('Dashboard.Conversation.add');

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
