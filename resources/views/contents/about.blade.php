@extends('layouts.app')

@section('title','About')

@section('content')
<main id="about">
    <h1>Ryan Cabarrubias</h1>
    <p>
        I am a dedicated and passionate student currently pursuing a Bachelor of Science in Information Technology (BSIT).
        I have always had a deep interest in technology and problem-solving, which led me to choose programming as my career path.
        Throughout my studies, I have gained a solid foundation in various programming languages, software development practices, and database management.
    </p>
    <img src="{{ asset('storage/images/profile/profile1.png') }}" alt="Profle">
    <ul>
        <li>Watching Movies</li>
        <li>Eating</li>
    </ul>
</main>
@endsection
