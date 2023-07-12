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
</style>
<!--=== Start Banner Section ===-->
<section class="banner-section bg-1">
    <div class="container">
        <div class="banner-content text-center" style="max-width: 100%">
            <h1 class="wow fadeInUp delay-0-2s" style="font-size: 71px;">Leader Algérien du Froid <br> commercial et industriel</h1>
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
                        <a style="cursor: pointer">Agriculture</a>
                    </h3>

                </div>
            </div>

            <div class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-4s">
                    <i class="icofont-fix-tools"></i>
                    <h3>
                        <a style="cursor: pointer">professionnels</a>
                    </h3>
                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-industries"></i>
                    <h3>
                        <a style="cursor: pointer">industrie</a>
                    </h3>
                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-snow-alt"></i>
                    <h3>
                        <a style="cursor: pointer">chambre froide</a>
                    </h3>

                </div>
            </div>


        </div>
    </div>

    <img src="{{asset('front/assets/images/services-bg-shape.png')}}" class="services-bg-shape" alt="Image">
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
                    <span class="up-title" style="color: #fff">solutions sur mesure </span>
                    <h2>Votre partenaire pour des solutions sur mesure.</h2>
                    <p>Chez FROIDIS, nous sommes spécialisés dans la conception et la réalisation de solutions sur mesure pour répondre aux besoins spécifiques de chaque client, grâce à notre équipe d'experts en froid industriel.</p>

                    <button class="main-btn" style="background-color: #fff">
                        <span style="color: #173a7a">
                            Lire plus
                            <i class="icofont-arrow-right"></i>
                        </span>
                    </button>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="text-center wow fadeInRight delay-0-2s">
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=qEp9p85TFHM&ab_channel=TechFreeze" class="popup-youtube">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <i class="icofont-play-alt-2"></i>
                        </a>
                    </div>
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
                <span class="up-title">Projets</span>
                <h2 >Projets réalisés avec succès </h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a style="cursor: pointer" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-1.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">Projet froidis 1 </a>
                            </h3>
                            <p>Description pour le profjet froidis N°1</p>
                            <a style="cursor: pointer" class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a style="cursor: pointer" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-2.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">Projet froidis 2 </a>
                            </h3>
                            <p>Description pour le profjet froidis N°2</p>
                            <a style="cursor: pointer"class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a style="cursor: pointer" class="blog-img">
                        <img src="{{asset('front/assets/images/blog/blog-3.jpg')}}" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a style="cursor: pointer">Projet froidis 3 </a>
                            </h3>
                            <p>Description pour le profjet froidis N°3</p>
                            <a style="cursor: pointer" class="main-detail-btn">
                                Lire plus
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--=== End Blog Section ===-->

@endsection
