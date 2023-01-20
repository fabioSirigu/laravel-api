<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'results' => Project::with(['type', 'technologies'])->orderByDesc('id')->paginate(5)
        ]);

        //return project::orderByDesc('id')->paginate(5);
    }

    public function show($slug)
    {
        /* Show the single project as json */
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();
        //dd($project);
        //se project esiste allora inserisci dentro results i projects
        if ($project) {
            return response()->json([
                'success' => true,
                'results' => $project
            ]);
        }
        //altrimenti utilizza un messaggio per gestire l'errore
        else {
            return response()->json([
                'success' => false,
                'results' => 'Project Not Found'
            ]);
        }
    }
}
