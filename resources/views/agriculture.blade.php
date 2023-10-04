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
            <h2>Agriculture - chambre froide</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    <a href="index.html">Agriculture</a>
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
                        <img src="{{ asset('/agriculture-2.jpg')}}" alt="Image">
                    </div>
                    <div class="item">
                        <img src="{{ asset('/agriculture-1.jpg')}}" alt="Image">
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
            <h3>Bienvenue dans le monde de l'agriculture connectée au froid avec FROIDIS !</h3>
            <p>L'agriculture moderne dépend étroitement de la technologie, et le froid est l'un des piliers de cette révolution. Chez FROIDIS, nous sommes fiers d'être à la pointe de l'industrie du froid, en fournissant des solutions de pointe pour répondre aux besoins spécifiques de l'agriculture.</p>
            <p><b>L'agriculture du futur :</b>  L'agriculture ne se limite plus aux champs ensoleillés. Elle s'étend désormais à des environnements contrôlés, où la température et l'humidité sont essentielles pour la croissance et la conservation des cultures. FROIDIS est à la pointe de cette révolution en fournissant des chambres froides, des entrepôts frigorifiques, et des équipements de pointe pour la préservation des produits agricoles.</p>
            <p><b>Solutions sur mesure :</b>  Chaque type de produit agricole a ses propres besoins en matière de froid. Les légumes frais, les fruits délicats, la viande et les produits laitiers exigent des conditions spécifiques de température et d'humidité pour maintenir leur qualité. Chez FROIDIS, nous proposons des solutions sur mesure pour répondre à ces besoins, garantissant ainsi la fraîcheur et la longévité des produits.</p>
            <p><b>Partenariat et support :</b> Chez FROIDIS, nous ne fournissons pas seulement des équipements, nous établissons des partenariats. Notre équipe dédiée est là pour vous accompagner à chaque étape, de la conception de votre installation à son entretien continu.</p>
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
