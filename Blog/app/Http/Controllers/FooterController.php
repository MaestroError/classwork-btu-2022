<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller {
    function edit(Request $request) {
        $data = $request->validate([
            'email' => 'required|email',
            'address' => 'required',
            'phone' => 'required',
            'about_us' => 'required',
        ]);

        foreach ($data as $key => $value) {
            Footer::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        return redirect()->route('/')->with('success', 'Settings updated successfully.');
    }
}


