@extends('layout')
@section('content')
    <main class="page lanidng-page">
        <section class="portfolio-block block-intro">
            <div class="container">
                <div class="avatar"
                     style="background-image:url(&quot;assets/img/avatars/rusty_spotted_cat.jpg&quot;);"></div>
                <div class="about-me">
                    <p>Hello! I am <strong>Jesper van Berlo</strong>.</p>
                </div>
            </div>
        </section>
        <section class="portfolio-block photography">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#">
                            <img class="img-fluid image" src="assets/img/nature/image5.jpg"></a>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#">
                            <img class="img-fluid image" src="assets/img/nature/image2.jpg"></a>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover"><a href="#">
                            <img class="img-fluid image" src="assets/img/tech/image4.jpg"></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
