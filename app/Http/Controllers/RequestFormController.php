<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestFormController extends Controller
{
    //insert form request
    public function insertform(Request $request)
    {
        // Validate the form data
        $request->validate([
            'date' => 'required',
            'name' => 'required',
            'section' => 'required',
            'categories' => 'required',
            'purpose' => 'required',
            'product' => 'required',
            'model' => 'required',
            'brand' => 'required',
            'size' => 'required',
            'qty' => 'required|integer',
            'unit' => 'required',
            'file' => 'nullable|file|mimes:jpg,png,pdf|max:2048' // Validate file upload
        ]);

        // Handle file upload
        $fileName = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = 'file_' . time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/uploads', $fileName);
        }

        // Store other form data in the database or handle as needed
        $data = $request->only('date', 'name', 'section', 'categories', 'purpose', 'product', 'model', 'brand', 'size', 'qty', 'unit');
        $data['file'] = $fileName; // Add the file name to the data if file uploaded

        // Example: Save to database or other storage
        // YourModel::create($data);

        return response()->json([
            'message' => 'Request submitted successfully!',
            'data' => $data,
        ]);
    }
}
