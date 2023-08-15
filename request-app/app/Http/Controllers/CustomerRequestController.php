<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerRequest;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

class CustomerRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('index');
    }
    public function requests(){
        return view('requests');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }



    public function all(Request $request)
    {
        $token = $request->input('token');
        $user = auth()->user($token);

        if ($user) {
            $allrequests = CustomerRequest::where('user_id', $user->id)->get();

            return view('all',compact('allrequests'));
        } else {
            return redirect(route('all'))->with('message','error');;
        }
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        /*CustomerRequest::create($request->all());*/
        $customerrequest = new CustomerRequest;
        $customerrequest->title = $request->title;
        $customerrequest->detail = $request->detail;
        $customerrequest->comment = "-";
        $customerrequest->user_id = Auth::user()->id;

        $customerrequest->save();


        return redirect()->route('all')->with('success', 'Request added successfully');
    }

    /**
     * Display the specified resource.
     */

    public function show(string $id)
    {
        $customerrequest = CustomerRequest::findOrFail($id);

        return view('show', compact('customerrequest'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $customerrequest = CustomerRequest::findOrFail($id);

        return view('edit', compact('customerrequest'));
    }

     /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customerrequest = CustomerRequest::findOrFail($id);

        $customerrequest->update($request->all());

        return redirect()->route('all')->with('success', 'Request updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $customerrequest = CustomerRequest::findOrFail($id);

        $customerrequest->delete();

        return redirect()->route('all')->with('success', 'Request deleted successfully');
    }
}
