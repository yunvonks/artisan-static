@extends('_layouts.master')

@section('content')
    <h1>Welcome to Artisan Static</h1>

    <p>Artisan Static is a starter template for building a static Jigsaw blog hosted on Netlify.</p>

    <p>This comes with code highlighting, share buttons, comments, analytics, an RSS feed, a contact form, a CMS and more.</p>

    <p>The HTML, CSS and JavaScript in this template are extremely minimal, which makes the code easy to build on top of or replace completely.</p>

    <a href="https://fakhrurpedia.com" target="_blank" rel="noopener">
        <img src="{{ media('fakhrurpedia.png') }}" alt="ko-fi" width="223" height="30">
    </a>

    <h2 id="test">Asset Compilation Test</h2>

    <p>CSS test: <span class="test-css">text with blue border</span></p>

    <p>Hompage: <a href="https://fakhrurpedia.com" class="test-js">click me</a></p>
@endsection
