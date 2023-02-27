@extends('layouts.app')

@section('content')
    <profile :user="{{ $user }}" :projects="{{ $projects }}"></profile>
@endsection
