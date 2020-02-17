@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Create new record</h2>
                </div>
                <form method="POST" action="/dashboard">
                    @csrf
                    Cursus:<br>
                    <input type="text" name="cursus" class="input-group-text"><br>
                    EC:<br>
                    <input type="number" name="ec" class="input-group-text"><br>
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
@endsection
