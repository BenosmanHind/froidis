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
            <h2>Entrepôt Frigorifique</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li>
                    <a href="#">Entrepôt Frigorifique</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Projects Details Section ===-->
<section class="project-details-section  pt-100" style="margin-bottom:100px; ">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="article-carousel owl-carousel owl-theme">
                    <div class="item">
                        <img src="{{ asset('/entrepot.jpg')}}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <h3>Entrepôt Frigorifique</h3>
                <p>Nous nous engageons à offrir une préservation optimale de vos marchandises. Nos solutions sont conçues pour répondre aux défis des différents entrepôts frigorifiques et des chambres froides.</p>

                <div class=" mt-4 mb-4 d-flex justify-content-center" style="margin-bottom:20px; padding: 20px; background-color:#CFE3FF">
                        <p style="font-size: 20px;color:#174587">Remplissez le formulaire pour nous faire part de  <b> vos besoins spécifiques !</b></p> <br>

               </div>
                <a  href="{{asset('/project-talk')}}" class="main-btn">
                <span>Obtenir une offre</span>
                </a>
            </div>
        </div>




    </div>
</section>
<!--=== End Projects Details Section ===-->

@endsection
