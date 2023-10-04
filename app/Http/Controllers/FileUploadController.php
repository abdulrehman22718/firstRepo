<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function showForm()
    {
        return view('upload_form');
    }

    public function uploadFile(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        $file = $request->file('file');

        // Store the file in DigitalOcean Spaces
        $path = Storage::disk('spaces')->putFile('/', $file, 'public');

        // Generate a public URL for the file
        $url = Storage::disk('spaces')->url($path);

        return "File uploaded successfully. URL: $url";
    }
}
