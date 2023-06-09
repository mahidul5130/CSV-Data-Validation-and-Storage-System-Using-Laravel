<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // Validate the uploaded file
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv|max:2048',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $file = $request->file('file');

        // Read and process the CSV data
        $csvData = array_map('str_getcsv', file($file->path()));
        $headers = array_shift($csvData);

        // Initialize variables for tracking statistics
        $totalData = count($csvData);
        $totalUploaded = 0;
        $totalDuplicate = 0;
        $totalInvalid = 0;
        $totalIncomplete = 0;
        $invalidRecords = [];
        $duplicateRecords = [];

        foreach ($csvData as $row) {
            $data = array_combine($headers, $row);

            // Validate the data for each row
            $validator = Validator::make($data, [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'phone_number' => 'required|regex:/^(?:\+?88)?01[3-9]\d{8}$/|unique:users,phone_number',
                'gender' => 'required',
                'address' => 'required',
            ]);

            // If validation fails, store the invalid record and continue to the next row
            if ($validator->fails()) {
                $errors = $validator->errors()->all();
                $invalidRecords[] = [
                    'record' => $data,
                    'errors' => $errors,
                ];
                $totalInvalid++;
                continue;
            }

            // Check for duplicate records
            $existingUser = User::where('email', $data['email'])
                ->orWhere('phone_number', $data['phone_number'])
                ->first();

            // If a duplicate record is found, store it and continue to the next row
            if ($existingUser) {
                $duplicateRecords[] = [
                    'record' => $data,
                    'existing_user' => $existingUser,
                ];
                $totalDuplicate++;
                continue;
            }

            // Create a new user record
            User::create($data);
            $totalUploaded++;
        }

        // Prepare the summary data
        $summary = [
            'totalData' => $totalData,
            'totalUploaded' => $totalUploaded,
            'totalDuplicate' => $totalDuplicate,
            'totalInvalid' => $totalInvalid,
            'totalIncomplete' => $totalIncomplete,
        ];

        // Return the summary view with the relevant data
        return view('summary', compact('summary', 'invalidRecords', 'duplicateRecords'));
    }

    public function userList(Request $request)
    {
        $users = User::query();

        // Apply filters based on the request parameters
        if ($request->filled('name')) {
            $users->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('email')) {
            $users->where('email', 'like', '%' . $request->input('email') . '%');
        }

        if ($request->filled('phone_number')) {
            $users->where('phone_number', 'like', '%' . $request->input('phone_number') . '%');
        }

        if ($request->filled('gender')) {
            $users->where('gender', $request->input('gender'));
        }

        // Get the filtered users
        $filteredUsers = $users->get();

        // Return the user list view with the filtered users
        return view('list', compact('filteredUsers'));
    }
}