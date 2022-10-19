<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Identity;
use App\Models\Formation;
use App\Models\Experience;
use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function index()
    {
        $identities = Identity::all();
        $formations = Formation::all();
        $experiences = Experience::all();
        $skills = Skill::all();
        
        return view('pages.home', compact('identities', 'experiences', 'skills', 'formations'));
    }
}
