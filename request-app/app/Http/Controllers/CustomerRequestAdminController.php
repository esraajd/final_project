<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRequest;

class CustomerRequestAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $customersrequest = CustomerRequest::orderBy('created_at', 'DESC')->get();

        return view('home.index', compact('customersrequest'));
    }



    /**
     * Display the specified resource.
     */
    public function showadmin(string $id)
    {
        $customersrequest = CustomerRequest::findOrFail($id);

        return view('home.showadmin', compact('customersrequest'));
    }


    /**
     * Show the form for editing the specified resource.
     */

    public function editadmin(string $id)
    {
        $customersrequest = CustomerRequest::findOrFail($id);

        return view('home.editadmin', compact('customersrequest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateadmin(Request $request, string $id)
    {
        $customerrequest = CustomerRequest::find($id);

        $customerrequest->update([
            'status' => $request->status,
            'due_date' =>$request->due_date,
            'comment' =>$request->comment
        ]);
        return redirect()->route('home.index')->with('success', 'Request updated successfully');


    }


}
