<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\SkillSet;
use Illuminate\Http\Request;
use Validator;

class HomeController extends Controller
{
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'email' => 'required|email|unique:candidates,email',
            'phone' => 'required|unique:candidates,phone',
            'skill' => 'required',
            'job' => 'required',
            'year' => 'required',
        ]);

        $payload = $validator->validated();

        $candidate = Candidate::create([
            'name' => $payload['name'],
            'email' => $payload['email'],
            'phone' => $payload['phone'],
            'year' => $payload['year'],
            'job_id' => $payload['job'],
            'created_by' => 1,
            'updated_by' => 1,
            'deleted_by' => 1,
        ]);
        SkillSet::create([
            'candidate_id' => $candidate->id,
            'skill_id' => $payload['skill']
        ]);

        return redirect()->back();
    }
}
