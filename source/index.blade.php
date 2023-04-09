@extends('_layouts.master')

@section('content')
    <h1>Technology Esclair</h1>

    <p>Technology Esclair Merupakan Situs Web Yang Dikembangkan Oleh Fakhrurpedia Incrementals Network.</p>

    <p>Situs Ini Nantinya Akan Menjadi Menjadi Blog Yang Membahas Seputar Teknologi.</p>

    <p>The HTML, CSS and JavaScript in this template are extremely minimal, which makes the code easy to build on top of or replace completely.</p>

    <a href="https://fakhrurpedia.com" target="_blank" rel="noopener">
        <img src="{{ media('fakhrurpedia.png') }}" alt="ko-fi" width="223" height="30">
    </a>

    <h2 id="test">Asset Compilation Test</h2>

    <p>CSS test: <span class="test-css">text with blue border</span></p>

    <p>Hompage: <a href="https://fakhrurpedia.com" class="test-js">click me</a></p>
@endsection
