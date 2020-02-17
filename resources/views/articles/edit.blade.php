@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Edit record</h2>
                </div>
                <form method="POST" action="/articles/{{ $article->id }}">
                    @csrf
                    @method('PUT')
                    Titel:<br>
                    <input
                        type="text"
                        name="title"
                        value="{{ $article->title }}"
                        class="@error('title') border-danger @enderror"><br>
                    @error('title')
                    <p class="alert-danger">{{ $errors->first('title') }}</p>
                    @enderror
                    Excerpt:<br>
                    <input
                        type="text"
                        name="excerpt"
                        value="{{ $article->excerpt }}"><br>
                    Body:<br>
                    <textarea name="body">{{ $article->body }}</textarea><br><br>
                    <input type="submit">

                </form>

            </div>
        </section>

@endsection
