<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        // TODO 18: test_belongstomany_add
        // Add one sentence to save the project to the logged-in user
        //   by $request->project_id and with $request->start_date parameter

        return 'Success';
    }
}
