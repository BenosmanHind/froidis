@extends('layouts.front')
@section('content')

<style>
    .partenaire-services::before{
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 0;
        height: 100%;
        background-color: #2063C6;
        -webkit-transition: all ease 0.5s;
        transition: all ease 0.5s;
        z-index: -1;

    }
    .brightness:hover {
        -webkit-filter: brightness(150%);
         }
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

    .controller{
        display: none;
    }
</style>
<!--=== Start Banner Section ===-->
<section class="banner-section bg-1">
    <div class="container">
        <div class="banner-content text-center" style="max-width: 100%">
            <h1 class="wow fadeInUp delay-0-2s" style="font-size: 71px;">Votre partenaire en froid <br> commercial et industriel en Algérie</h1>
            <p class="wow fadeInUp delay-0-4s" style="max-width: 100%">Nous offrons des solutions innovantes pour répondre à vos besoins  <br> en matière de froid industriel.</p>
            <a style="cursor: pointer" class="main-btn wow fadeInUp delay-0-8s">
                <span>
                    A propos de nous
                    <i class="icofont-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</section>
<!--=== End Banner Section ===-->

<!--=== Start Services Section ===-->
<section class="services-section  pt-100 pb-70" style="background-color: #173a7a;">
    <div class="container">
        <div class="main-section-title wow fadeInUp delay-0-2s">
            <span class="up-title" style="color: #fff">Secteurs d'activité</span>
            <h2 style="color: #fff">Depuis 1995, Une large gamme de secteurs d'activité.</h2>
        </div>

        <div class="row">
            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-2s">
                    <i class="icofont-tree-alt"></i>
                    <h3>
                        <a style="cursor: pointer" href="{{asset('/agriculture')}}">Agriculture </a>
                    </h3>

                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-snow-alt"></i>
                    <h3>
                        <a style="cursor: pointer" href="{{asset('/entrepot-frigorifique')}}">Entrepot frigorifique </a>
                    </h3>

                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-industries"></i>
                    <h3>
                        <a style="cursor: pointer" href="{{asset('/industrie')}}">Industrie </a>
                    </h3>
                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-workers-group"></i>
                    <h3>
                        <a style="cursor: pointer" href="{{asset('/professionnels')}}">Professionnels</a>
                    </h3>
                </div>
            </div>


        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
</section>
<!--=== End Services Section ===-->



<!--=== Start Services Section ===-->
<section class="services-section  pt-100 pb-70" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="main-section-title wow fadeInUp delay-0-2s">
            <span class="up-title" style="color: #173a7a">Denrées Alimentaires</span>
            <h2 style="color: #173a7a">Stay Fresh !</h2>
        </div>

        <div class="container d-flex justify-content-center">
            <div class="row col-md-8 ">
                    <div class="col-md-3 text-center">
                        <a href="{{asset('/fruit-et-legume')}}"><img src="{{asset('/fruits.png')}}"  class="brightness" alt="" srcset=""></a>  <br>
                        <span class="up-title" style="color: #173a7a">Fruits et légumes</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{asset('/viandes-et-poissons')}}"><img src="{{asset('/viande-poisson.png')}}"  class="brightness" alt="" srcset=""></a> <br>
                        <span class="up-title" style="color: #173a7a">Viandes et poissons</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{asset('/produits-laitiers')}}"><img src="{{asset('/produit-laitiers.png')}}"  class="brightness" alt="" srcset=""></a> <br>
                        <span class="up-title" style="color: #173a7a">Produits laitiers</span>
                    </div>
                    <div class="col-md-3 text-center">
                        <a href="{{asset('/boissons')}}"><img src="{{asset('/boissons.png')}}"  class="brightness" alt="" srcset=""></a> <br>
                        <span class="up-title" style="color: #173a7a">Boissons</span>
                    </div>
            </div>
        </div>
</section>
<!--=== End Services Section ===-->





<!--=== Start Projects Section ===-->
<section class="projects-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="main-section-title wow fadeInUp delay-0-2s">
                <span class="up-title">Produits</span>
                <h2> Des produits certifiés aux normes internationales </h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a href="{{asset('/products/evaporateur')}}" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-1.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{asset('/products/evaporateur')}}">ÉVAPORATEURS</a>
                            </h3>
                            <p>"MASTERKIT Réfrigération" produits adaptés à vos exigences.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="{{ asset('/products/groupes-de-condensation') }}" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-2.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="{{ asset('/products/groupes-de-condensation') }}">GROUPES DE CONDENSATION</a>
                            </h3>
                            <p>Des groupes de condensation commerciaux et Industriels. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a style="cursor: pointer" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-3.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">COMPRESSEURS FRIGORIFIQUES</a>
                            </h3>
                            <p>Hermétiques en MANEUROP, DANFOSS et COPELAND et Semi-hermétique </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a style="cursor: pointer" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-4.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">CENTRALES FRIGORIFIQUES</a>
                            </h3>
                            <p>conçues pour le marché du froid industriel </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a style="cursor: pointer" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-5.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">CONDENSEURS A AIR</a>
                            </h3>
                            <p>de la marque Masterkit Réfrigération</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a style="cursor: pointer" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-6.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">RÉGULATION ET CONTRÔLE</a>
                            </h3>
                            <p>Une large gamme certifiée et adaptée à tous vos besoins</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Projects Section ===-->


<!--=== Start Video Section ===-->
<section class="video-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content wow fadeInLeft delay-0-2s">
                    <span class="up-title" style="color: #fff">communauté des techniciens</span>
                    <h2>Vous êtes technicien du froid ?</h2>
                    <p>Vous êtes technicien du froid et souhaitez bénéficier d’un accompagnement personnalisé, d’offres spéciales et d’un accès exclusif à des fonctionnalités avancées sur notre plateforme ? Rejoignez dès aujourd'hui la communauté Froidis et profitez de nombreux avantages !</p>

                    <a href="{{asset('/register-pro')}}" class="main-btn" style="background-color: #fff">
                        <span style="color: #173a7a">
                            inscription
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Video Section ===-->

<!--=== Start Blog Section ===-->
<section class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">certification</span>
                        <h2>FROIDIS est fière d'être certifiée ISO 9001 version 2015,</h2>
                        <p>une preuve de notre engagement envers la qualité et la satisfaction de nos clients</p>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s d-flex justify-content-end">
                    <img src="{{asset('front/assets/images/iso-9001.jpg')}}" alt="Image">

                </div>
            </div>
        </div>


    </div>
</section>
<!--=== End Blog Section ===-->


<!--=== Start Services Section ===-->
<section class="services-section  pt-100 pb-70" style="background-color: #173a7a;">
    <div class="container">
        <div class="main-section-title wow fadeInUp delay-0-2s">
            <span class="up-title" style="color: #fff">nos partenaires </span>
            <h2 style="color: #fff">leaders internationaux du secteur du froid</h2>
        </div>

        <div class="services-slider owl-carousel owl-theme">
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p1.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p2.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p3.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p4.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p5.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p6.png')}}" alt="Image">
            </div>
            <div class="main-services-item wow partenaire-services fadeInUp delay-0-2s" >
                <img src="{{asset('front/assets/images/p7.png')}}" alt="Image">
            </div>

        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
</section>
<!--=== End Services Section ===-->


<!--=== Start Blog Section ===-->
<section class="blog-section pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="main-section-title wow fadeInUp delay-0-2s">
                <span class="up-title">Medias</span>
                <h2 >Notre Métier en Images</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="medias-carousel owl-carousel ">
                <div class="col-md-3" style="width:100%;">
                    <div class="main-team-item fadeInUp delay-0-2s">
                        <a href="#" class="team-img">
                            <img src="{{asset('front/assets/images/media-1.jpg')}}" alt="Image">
                        </a>
                   </div>
                </div>
                <div class="col-md-3" style="width:100%;">
                    <div class="main-team-item fadeInUp delay-0-2s">
                        <a href="#" class="team-img">
                            <img src="{{asset('front/assets/images/media-2.jpg')}}" alt="Image">
                        </a>
                   </div>
                </div>
                <div class="col-md-3" style="width:100%;">
                    <div class="main-team-item fadeInUp delay-0-2s">
                        <a href="#" class="team-img">
                            <img src="{{asset('front/assets/images/media-3.jpg')}}" alt="Image">
                        </a>
                   </div>
                </div>
                <div class="col-md-3" style="width:100%;">
                    <div class="main-team-item fadeInUp delay-0-2s">
                        <a href="#" class="team-img">
                            <img src="{{asset('front/assets/images/media-4.jpg')}}" alt="Image">
                        </a>
                   </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

@endsection
