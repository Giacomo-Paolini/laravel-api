<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with("technologies")->paginate(4);

        return response()->json ([
            'success' => true,
            'data' => $projects
        ]);
    }
}
