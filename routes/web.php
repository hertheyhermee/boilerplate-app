<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo-form', function () {
    return view('demo-form');
});

Route::post('/demo-form', function (\Illuminate\Http\Request $request) {
    // Save to database (demo: just save to demo_submissions table)
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
    ]);
    
    \DB::table('demo_submissions')->insert([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return redirect('/demo-form')->with('success', 'Form submitted!');
});
