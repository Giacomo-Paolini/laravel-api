<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $project = Project::all();

        return response()->json ([
            'success' => true,
            'data' => $project
        ]);
    }
}
