<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobRequest;

class JobRequestController extends Controller
{
    public function index()
    {
        $jobs = Job::all();

        $jobrequests = JobRequest::all();

        return view('jobrequest_list', compact('jobs', 'jobrequests'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string',
            'postalcode' => 'required|string|regex:/^[A-Za-z0-9 ]+$/',
            'phone' => 'required|string|regex:/^[0-9]{10,15}$/',
            'job' => 'required|string'
        ]);

        JobRequest::create($request->all());

        return redirect()->back()->with('success', 'Job request submitted successfully!');
    }
}
