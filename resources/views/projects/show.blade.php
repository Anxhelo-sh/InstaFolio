@extends('layouts.app')

@section('content')
    <a href="{{ route('user-profile.index') }}" class="posts-container row pt-3 pb-1 border-bottom text-decoration-none text-white">
        <div class="col-4">
            <div class="svg-icons">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/>
                </svg>
            </div>
        </div>
        <div class="col-4">
            <div class="d-flex justify-content-between align-items-center align-content-center flex-column">
                <div>
                    {{ strtoupper($project->user->name) }}
                </div>
                <div>
                    Posts
                </div>
            </div>
        </div>

    </a>
    <post :project="{{ $project }}"></post>
@endsection

