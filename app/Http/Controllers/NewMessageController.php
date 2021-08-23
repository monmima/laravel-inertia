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

        // JSON
        // return [
        //     "produits" => $produits,
        //     "categories" => $categories
        // ];

    }
}
