@extends('layouts.front')
@section('content')
<style>
    .overflow-section{
    line-height: 1.5 !important;
    height: 4.5em !important;
    overflow: hidden !important;
}
.page-banner-content ul li {
    color: #fff !important;
}
</style>
<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2> Actualités</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Actualités
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Section ===-->
<section class="blog-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Actualités</span>
                        <h2>Découvrir toutes nos actualités. </h2>
                    </div>
                </div>

            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($actualites as $item)
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="{{asset('actualite/'.$item->slug)}}" class="blog-img">
                        <img src="{{ asset('storage/images/actualites/'.$item->images[0]->link) }}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>{{ $item->date }}</li>
                            </ul>
                            <h3  class="overflow-section">
                                <a href="{{asset('actualite/'.$item->slug)}}">{{ $item->title }}</a>
                            </h3>
                            <p class="overflow-section">{{
                                preg_match_all('/(.*?[.!?])\s/', $item->description, $matches)
                                ? implode(' ', array_slice($matches[0], 0, 3)) . '...'
                                : $item->description
                            }}</p>
                            <a href="{{asset('actualite/'.$item->slug)}}" class="main-detail-btn">
                                Lire la suite
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

@endsection
@section('actualites-active', 'active')
