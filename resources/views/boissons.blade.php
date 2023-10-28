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
      background-color: #035479;
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

</style>



<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Le Froid : Gardien de la Fraîcheur des Boissons !</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Boissons</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Projects Details Section ===-->
<section class="project-details-section pt-100">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="article-carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('/oignon-1.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="project-left-sidebar">
                    <h3>Explorez la diversité de nos produits</h3>
                    <ul>
                        <li>
                            <a href="{{asset('/')}}">Evaporateurs</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}">Condensateurs</a>
                        </li>
                        <li>
                            <a href="{{asset('/')}}">Compresseurs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="project-details-cntent ptb-50">
            <h3>Le Froid : Gardien de la Fraîcheur des Boissons !</h3>
            <p>Les boissons, qu'elles soient rafraîchissantes ou revigorantes, sont des incontournables de notre quotidien. Cependant, leur qualité et leur goût dépendent en grande partie d'un élément essentiel : le froid. Les boissons fraîches, qu'il s'agisse de jus de fruits, de sodas ou d'autres breuvages, demandent une attention particulière pour maintenir leur fraîcheur et prolonger leur durée de vie. C'est là que la technologie de conservation à basse température entre en jeu, garantissant la préservation de la qualité de ces délices liquides sur le long terme.</p>
            <p><b>La Science de la Conservation au Froid :</b>  La préservation des boissons exige une gestion précise de la température et de l'humidité. Des équipements de réfrigération spécialement conçus sont essentiels pour maintenir des conditions optimales, évitant ainsi la détérioration, la perte de pétillant et la préservation de la saveur.</p>
            <p>Chez FROIDIS, notre expertise dans l'art de la maîtrise du froid garantit la préservation inégalée de la fraîcheur de vos boissons. Découvrez comment nos solutions innovantes veillent sur ces précieux liquides à chaque étape de leur conservation. Notre engagement est de maintenir la qualité et la fraîcheur de vos boissons, contribuant ainsi à une expérience de dégustation rafraîchissante et savoureuse pour tous.</p>
        </div>

       <div class="row  mb-4 d-flex justify-content-center" style="margin-bottom:20px; padding: 20px; background-color:#CFE3FF">
            <div class="col-md-8 mt-1">
                <p style="font-size: 20px;color:#174587">Remplissez le formulaire pour nous faire part de  <b> vos besoins spécifiques !</b></p>
            </div>
            <div class="col-md-2">
                <a href="{{ asset('/demande-devis') }}"  class="main-btn">
                    <span>Obtenir une offre</span>
                </a>
            </div>
       </div>
    </div>
</section>
<!--=== End Projects Details Section ===-->

@endsection
