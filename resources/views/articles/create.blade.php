@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Create new record</h2>
                </div>
                <form method="POST" action="/articles">
                    @csrf
                    Titel:<br>
                    <input
                        type="text"
                        name="title"
                        class="input @error('title') border-danger @enderror"
                        value="{{ old('title') }}"><br>
                    @error('title')
                    <p class="alert-danger">{{ $errors->first('title') }}</p>
                    @enderror
                    Excerpt:<br>
                    <input
                        type="text"
                        name="excerpt"
                        class="input @error('excerpt') border-danger @enderror"
                        value="{{ old('excerpt') }}"><br>
                    @error('excerpt')
                    <p class="alert-danger">{{ $errors->first('excerpt') }}</p>
                    @enderror
                    Body:<br>
                    <textarea
                        name="body"
                        class="input @error('body') border-danger @enderror">
                        {{ old('body') }}
                    </textarea><br><br>
                    @error('body')
                    <p class="alert-danger">{{ $errors->first('body') }}</p>
                    @enderror
                    <input type="submit">

                </form>

            </div>
        </section>

@endsection
