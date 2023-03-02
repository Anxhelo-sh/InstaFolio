@extends('layouts.app')

@section('content')
    <home :projects="{{ $projects }}" :stories="{{ $stories }}"></home>
@endsection
