<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Action extends Controller
{
    public function addClient(Request $request)
    {

        $validatedData = $request->validate([
            'clientName' => 'required|string|max:100',
            // 'email' => 'required|email|max:255',
            // 'phone' => 'required|string|max:20',
        ]);

        if (!is_null($request->clientAddress)) {
            $validatedData = $request->validate([
                'clientAddress' => 'required|string|max:255',
            ]);
        }
        if (!is_null($request->phone)) {
            // $phone = intval($request->input('phone')); 
            $validatedData = $request->validate([
                'phone' => 'required|numeric|min:0|max:9999999999',
            ]);
        }

        // Create a new client using the validated data
        \App\Models\Client::create([
            'name' => $request->clientName,
            'address' => $request->clientAddress,
            'phone' => $request->phone,
        ]);


        // $client->save();

        return redirect()->route('client')->with('success', 'Client added successfully.');
    }

    public function addEmployee(Request $request)
    {
        // echo "<pre>";
        // var_dump($request->all());
        // exit();
        // Validate the request data

        $validatedData = $request->validate([
            'employeeName' => 'required|string|max:255',
            'department' => 'required|integer|exists:departments,id',
            'phoneNumber' => 'required|numeric|digits:11',
            'address' => 'required|string|max:500',
        ]);
        if (!is_null($request->employeeImage)) {
            // $phone = intval($request->input('phone')); 
            $validatedData = array_merge($validatedData ?? [], $request->validate([
                'employeeImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]));
            

            if ($request->hasFile('employeeImage')) {
                $imagePath = $request->file('employeeImage')->store('employee_images', 'public');
            }
        }
        $employee = new  \App\Models\Employee();
        $employee->full_name = $validatedData['employeeName'];
        $employee->manager_id = $validatedData['department'];
        $employee->phone_number = $validatedData['phoneNumber'];
        $employee->address = $validatedData['address'];
        $employee->image = $imagePath ?? null;
        $employee->save();
        return redirect()->route('employee')->with('success', 'Employee added successfully.');
    }
}
