@extends('layouts.app')

@section('content')
    <home :projects="{{ $projects }}"></home>
@endsection
