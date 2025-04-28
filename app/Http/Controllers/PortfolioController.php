<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{
    public function home()
    {
        $featuredProjects = Project::where('is_featured', true)
            ->orderBy('order')
            ->limit(3)
            ->get();

        $topSkills = Skill::where('is_featured', true)
            ->orderBy('proficiency', 'desc')
            ->limit(6)
            ->get();

        return Inertia::render('Home', [
            'featuredProjects' => $featuredProjects,
            'topSkills' => $topSkills,
        ]);
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function projects()
    {
        $projects = Project::orderBy('order')->get();
        
        return Inertia::render('Projects', [
            'projects' => $projects,
        ]);
    }

    public function skills()
    {
        $skills = Skill::orderBy('category')
            ->orderBy('proficiency', 'desc')
            ->get()
            ->groupBy('category');
        
        return Inertia::render('Skills', [
            'skillsByCategory' => $skills,
        ]);
    }

    public function contact()
    {
        return Inertia::render('Contact');
    }
}