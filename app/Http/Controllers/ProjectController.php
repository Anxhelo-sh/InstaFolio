<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request): RedirectResponse
    {
        $data = $request->validated();

        try {
            Project::create([
                'user_id'     => $data['user_id'],
                'title'       => $data['title'],
                'description' => $data['description'],
            ]);

            return redirect()->back(ResponseAlias::HTTP_CREATED)->with('success', 'Project Created Successfully !');
        }catch (Exception $exception){
            Log::error('Failed Creating Project \\n'.$exception);

            return redirect()->back()->with('error', 'Failed Creating Project!');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|Response
    {
        try {
            $project->delete();

            return response(['id' => $project->id, 'deleted' => true], ResponseAlias::HTTP_OK);
        }catch (Exception $exception){
            dd($exception);
            Log::error($exception);
        }
    }
}
