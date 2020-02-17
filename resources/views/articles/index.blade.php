@extends('layout')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <a href="/articles/create">
                <i class="ion-plus ion-lg" >     <strong>Create an article</strong></i>
            </a>
            <br>
            <a href="/randomarticle">
                <i class="ion-plus ion-lg" >     <strong>Create a random article</strong></i>
            </a>

        @foreach($articles as $article)
                <div class="content">
                <div class="main-title">
                    <h2>
                    <a href="{{ route('articles.show', $article) }}">
                        {{$article->title}}
                    </a>
                    </h2>

                    <p class="image-left">
                        <img src="/images/banner.jpg" alt="" class="image image-half" />
                    </p>
                    <p class="card-text">
                        {{$article->excerpt}}
                    </p>
                    <br>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
