<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Story;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'projects' => Project::query()->with('user')->get(),
            'stories'   => Story::query()->with('user')->get(),
        ]);
    }
}
