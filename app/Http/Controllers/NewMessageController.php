<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewMessage;

class NewMessageController extends Controller
{
    //
    public function index()
    {
        return inertia("Hello");

        // JSON
        // return [
        //     "produits" => $produits,
        //     "categories" => $categories
        // ];

    }
}
