@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Create new record</h2>
                </div>
                <form method="POST" action="/dashboard/{{ $course->id }}">
                    @csrf
                    @method('PUT')
                    Naam:<br>
                    <input type="text" name="cursus" value="{{ $course->name }}"><br>
                    ECS:<br>
                    <input type="text" name="toets" value="{{ $course->ecs }}"><br>
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
@endsection
