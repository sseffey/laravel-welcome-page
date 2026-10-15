<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // Shows the page with the empty form
    public function index()
    {
        return view('welcome-page');
    }

    // Receives the submitted name and shows the welcome message
    public function greet(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Please enter your name.',
        ]);

        $name = $request->input('name');

        return view('welcome-page', ['name' => $name]);
    }
}
