@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Create new record</h2>
                </div>
                <form method="POST" action="/dashboard/{{ $course->id}}/createassignment">
                    @csrf
{{--                    {{dd($course)}}--}}
                    Toets:<br>
                    <input type="text" name="name" class="input-group-text"><br>
                    Weight:<br>
                    <input type="number" name="weight" class="input-group-text"><br>
                    Grade:<br>
                    <input type="number" name="grade" class="input-group-text" step="0.1"><br>
                    <input type="hidden" name="course" class="input-group-text" value="{{$course->id}}"><br>

                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
@endsection
