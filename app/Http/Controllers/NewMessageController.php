<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewMessage;

class NewMessageController extends Controller
{
    //
    public function index()
    {
        $messages = NewMessage::all();
        return inertia("Hello", ["messages" => $messages]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "message" => "required|min:1"
        ]);

        NewMessage::create($validated);

        return redirect("/hello-database");
    }
}
