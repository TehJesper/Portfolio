@extends('layout')
@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <a href="{{ route('articles.edit', $article) }} " class="">
                    <i class="ion-android-create ion-2x">&nbsp;&nbsp;&nbsp;</i>
                </a>
                <a onclick="return confirm('Are you sure?')" href="{{route('articles.destroy', $article)}}">
                    <i class="ion-android-close ion-2x"></i>
                </a>
                <div class="title">
                    <h2>{{$article->title}}</h2>

                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                {!! $article->body !!}
            </div>
        </div>
    </div>
    </div>
@endsection
