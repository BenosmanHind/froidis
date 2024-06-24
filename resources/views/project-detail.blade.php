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
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content" style="max-width: 800px;">
            <h2>{{$project->title}}</h2>
            <ul>
                <li>
                    <a href="#">Projets</a>
                </li>
                <li>
                    {{$project->title}}
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
                    <div class="article-carousel owl-carousel owl-theme">
                        @foreach ($project->images as $img)
                            <div class="item">
                                <img src="{{ asset('storage/images/projects/'.$img->link) }}" class="blog-details-main-img" alt="Image">
                            </div>
                        @endforeach
                    </div>
                    <ul>
                        <li><h3><span class="badge bg-danger"> Sur {{$project->wilaya}}</span><h3></li>
                    </ul>
                    <p>{!! $project->description  !!}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="categories">
                        <h3>Voir plus</h3>
                        <ul>
                            @foreach ($projects as $item)
                                <li>
                                    <a href="{{url('project/'.$item->slug)}}">
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
@section('projects-active', 'active')
