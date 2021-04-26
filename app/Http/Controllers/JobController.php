<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showAllJobs()
    {
        return response()->json(Job::all());
    }

    public function showOneJob($id)
    {
        return response()->json(Job::find($id));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'job_title' => 'required',
            'job_status' => 'required',
        ]);
        
        $job = Job::create($request->all());

        Log::info("Job #" . $job["id"] . " Created");

        return response()->json($job, 201);
    }

    public function update($id, Request $request)
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());

        return response()->json($job, 200);
    }

    public function delete($id)
    {
        Job::findOrFail($id)->delete();
        return response('Deleted Job Successfully', 200);
    }
}
