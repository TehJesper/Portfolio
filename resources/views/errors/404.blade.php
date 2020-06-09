@extends('layout')
@section('content')
    <main class="page">
        <h1>
        <p class="text-center align-items-center" style="margin: 10% 0% 10% 0%">
            Deze pagina bestaat niet of is verplaatst.<br>
            <a href="{{ url()->previous() }}" style="color: #1a61e8">Ga terug naar de vorige pagina</a>
        </p>
        </h1>
    </main>
@endsection
