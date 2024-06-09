@extends('layouts.front')
@section('content')
<style>
.owl-carousel  {
    position: relative;
}
.owl-carousel .owl-nav {
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
}

.owl-carousel .owl-nav button.owl-prev,
.owl-carousel .owl-nav button.owl-next {
  font-size: 20px;
  background-color: #ffffff;
    width: 2rem;
    height: 2rem;
    color: #ffff;
  border: none;
  outline: none;
  cursor: pointer;
  opacity: 0.5;
}
.owl-carousel .owl-nav button.owl-prev:hover,
.owl-carousel .owl-nav button.owl-next:hover {
  opacity: 1;
  transition: 0.5s;
}


.owl-carousel .owl-nav button.owl-prev {
  position: relative;
  left: -5px;
}

.owl-carousel .owl-nav button.owl-next {
  position: relative;
  right: -5px;
}

.owl-carousel .owl-item.fadeOut {
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.owl-carousel .owl-item.fadeIn {
  opacity: 1;
  transition: opacity 1s ease-in-out;
}

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
<section class="page-banner-section" style="background-color: #173A7A; ">
    <div class="container">
        <div class="page-banner-content" style="max-width: 800px;">
            <h2>{{$actualite->title}}</h2>
            <ul>
                <li>
                    <a href="#">Actualité</a>
                </li>
                <li>
                    {{$actualite->title}}
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Blog Details Section ===-->
<section class="blog-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-content">
                    @if($actualite->link)
                    <iframe width="700" height="400" src="{{asset('https://www.youtube.com/embed/'.$actualite->link)}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    @else
                    <div class="article-carousel owl-carousel owl-theme">
                        @foreach ($actualite->images as $img)
                            <div class="item">
                                <img src="{{ asset('storage/images/actualites/'.$img->link) }}" class="blog-details-main-img" alt="Image">
                            </div>
                        @endforeach
                    </div>
                   @endif


                    <ul>

                        <li>
                            <i class="icofont-calendar"></i>
                           {{$actualite->date}}
                        </li>
                    </ul>
                    <p>{{  $actualite->description  }}</p>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="categories">
                        <h3>Voir plus</h3>
                        <ul>
                            @foreach ($actualites as $item)
                                <li>
                                    <a href="{{url('actualite/'.$item->slug)}}">
                                        <i class="icofont-long-arrow-right"></i>
                                        {{$item->title}}
                                    </a>
                                </li>

                            @endforeach
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Details Section ===-->

@endsection
@section('actualites-active', 'active')
