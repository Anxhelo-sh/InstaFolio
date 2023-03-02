@extends('layouts.app')

@section('content')
    <profile :user="{{ $user }}" :projects="{{ $projects }}" :followers="{{ $followers }}"></profile>
@endsection
