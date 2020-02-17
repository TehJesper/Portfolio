@extends('layout')
@section('content')
    <main class="page projects-page">
        <section class="portfolio-block projects-cards">
            <div class="container">
                <div class="heading">
                    <h2>Create new record</h2>
                </div>
                <form method="POST" action="/dashboard/{{ $dashboard->id }}">
                    @csrf
                    @method('PUT')
                    Cursus:<br>
                    <input type="text" name="cursus" value="{{ $dashboard->cursus }}"><br>
                    Toets:<br>
                    <input type="text" name="toets" value="{{ $dashboard->toets }}"><br>
                    EC:<br>
                    <input type="text" name="ec" value="{{ $dashboard->ec }}"><br>
                    Resultaat:<br>
                    <input type="text" name="resultaat" value="{{ $dashboard->resultaat }}"><br><br>
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>
@endsection
