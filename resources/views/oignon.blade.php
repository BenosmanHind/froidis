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
            <h2>Le Froid : Gardien de la Fraîcheur des Oignons</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    <a href="index.html">Oignons</a>
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
            <h3>Le Froid : Gardien de la Fraîcheur des Oignons !</h3>
            <p>Les oignons, ces trésors de saveurs et de nutriments, ont toujours trouvé leur place au cœur de notre cuisine. Pourtant, leur longévité et leur qualité dépendent en grande partie d'une chose essentielle : le froid.

                Les oignons fraîchement récoltés sont sujets à la déshydratation et à la pourriture s'ils ne sont pas stockés correctement. C'est là que le froid entre en jeu. Grâce aux avancées de la technologie de conservation, les oignons peuvent être gardés en parfait état pendant de longues périodes.</p>
            <p><b>Le Savoir-Faire de la Conservation au Froid :</b>  La conservation des oignons repose sur la maîtrise précise de la température et de l'humidité. Une chambre froide spécialement conçue pour les oignons permet de maintenir une température stable et un niveau d'humidité adéquat. Cela empêche la croissance de moisissures et de germes, préservant ainsi la fraîcheur des oignons.</p>
            <p>Chez FROIDIS, nous sommes fiers d'offrir des solutions innovantes pour préserver la fraîcheur inégalée des oignons à chaque étape de leur conservation. Découvrez comment notre expertise en matière de froid garantit que chaque oignon reste aussi croquant et savoureux que le jour de la récolte.</p>
        </div>

       <div class="row  mb-4 d-flex justify-content-center" style="margin-bottom:20px; padding: 20px; background-color:#CFE3FF">
            <div class="col-md-8 mt-1">
                <p style="font-size: 20px;color:#174587">Remplissez le formulaire pour nous faire part de  <b> vos besoins spécifiques !</b></p>
            </div>
            <div class="col-md-2">
                <button type="submit" class="main-btn">
                    <span>Obtenir une offre</span>
                </button>
            </div>
       </div>
    </div>
</section>
<!--=== End Projects Details Section ===-->

@endsection
