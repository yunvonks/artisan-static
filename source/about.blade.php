@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>My Name Is {{ $page->owner->name }}</p>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://fakhrurpedia.com" target="_blank">Fakhrurpedia</a></li>
        <li><a href="https://github.com/yunvonks" target="_blank">GitHub</a></li>
    </ul>
@endsection
