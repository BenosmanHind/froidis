@extends('layouts.front')
@section('content')
<!--=== Start Banner Section ===-->
<section class="banner-section bg-1">
    <div class="container">
        <div class="banner-content text-center" style="max-width: 100%">
            <h1 class="wow fadeInUp delay-0-2s" style="font-size: 71px;">Leader Algérien du Froid <br> commercial et industriel</h1>
            <p class="wow fadeInUp delay-0-4s" style="max-width: 100%">Nous offrons des solutions innovantes pour répondre à vos besoins  <br> en matière de froid industriel.</p>
            <a href="contact.html" class="main-btn wow fadeInUp delay-0-8s">
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
<section class="services-section bg-2 bg-color-f7f8f9 pt-100 pb-70">
    <div class="container">
        <div class="main-section-title wow fadeInUp delay-0-2s">
            <span class="up-title">Secteurs d'activité</span>
            <h2>Depuis 1995, Une large gamme de secteurs d'activité.</h2>
        </div>

        <div class="row">
            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-2s">
                    <i class="icofont-tree-alt"></i>
                    <h3>
                        <a href="#">Agriculture</a>
                    </h3>
                 
                </div>
            </div>
        
            <div class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-4s">
                    <i class="icofont-fix-tools"></i>
                    <h3>
                        <a href="#">professionnels</a>
                    </h3>
                </div>
            </div>
        
            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-industries"></i>
                    <h3>
                        <a href="#">industrie</a>
                    </h3>
                </div>
            </div>

            <div  class="col-md-3">
                <div class="main-services-item style-two wow fadeInUp delay-0-6s">
                    <i class="icofont-snow-alt"></i>
                    <h3>
                        <a href="services-details.html">chambre froide</a>
                    </h3>
              
                </div>
            </div>
            
           
        </div>
    </div>

    <img src="assets/images/services-bg-shape.png" class="services-bg-shape" alt="Image">
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
                    <a href="project-details.html" class="projects-img">
                        <img src="{{asset('front/assets/images/projects/projects-1.jpg')}}" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">ÉVAPORATEURS</a>
                            </h3>
                            <p>we uptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="project-details.html" class="projects-img">
                        <img src="assets/images/projects/projects-2.jpg" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">GROUPES DE CONDENSATION</a>
                            </h3>
                            <p>Des groupes de condensation commerciaux et Industriels. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="project-details.html" class="projects-img">
                        <img src="assets/images/projects/projects-3.jpg" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">Presentation Buldint</a>
                            </h3>
                            <p>we uptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-2s">
                    <a href="project-details.html" class="projects-img">
                        <img src="assets/images/projects/projects-4.jpg" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">Presentation Buldint</a>
                            </h3>
                            <p>we uptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-4s">
                    <a href="project-details.html" class="projects-img">
                        <img src="assets/images/projects/projects-5.jpg" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">Presentation Buldint</a>
                            </h3>
                            <p>we uptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-projects-item wow fadeInUp delay-0-6s">
                    <a href="project-details.html" class="projects-img">
                        <img src="assets/images/projects/projects-6.jpg" alt="Image">
                    </a>

                    <div class="project-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="project-details.html">Presentation Buldint</a>
                            </h3>
                            <p>we uptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Projects Section ===-->

<!--=== Start Team Section ===-->
<section class="team-section bg-1 bg-color-f2f3f5 pt-100 pb-70">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Our Team Membar</span>
                        <h2>This Best Team Membar Of Meting Helped Succee</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Louasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-team-item fadeInUp delay-0-2s">
                    <a href="team-details.html" class="team-img">
                        <img src="assets/images/team/tean-1.jpg" alt="Image">
                    </a>

                    <div class="team-content hover-style wow">
                        <div class="inner-border">
                            <h3>
                                <a href="team-details.html">Jhuhon Dew</a>
                            </h3>
                            <span>Founder</span>

                            <div class="team-social-link">
                                <button class="controller">
                                    <i class="icofont-arrow-right"></i>
                                </button>

                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vimeo.com/" target="_blank">
                                            <i class="icofont-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-team-item wow fadeInUp delay-0-4s">
                    <a href="team-details.html" class="team-img">
                        <img src="assets/images/team/tean-2.jpg" alt="Image">
                    </a>

                    <div class="team-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="team-details.html">Kilvaz Smith</a>
                            </h3>
                            <span>Marketer</span>

                            <div class="team-social-link">
                                <button class="controller">
                                    <i class="icofont-arrow-right"></i>
                                </button>

                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vimeo.com/" target="_blank">
                                            <i class="icofont-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-team-item hover-style wow fadeInUp delay-0-6s">
                    <a href="team-details.html" class="team-img">
                        <img src="assets/images/team/tean-3.jpg" alt="Image">
                    </a>

                    <div class="team-content hover-style">
                        <div class="inner-border">
                            <h3>
                                <a href="team-details.html">Admon Smith</a>
                            </h3>
                            <span>Founder</span>

                            <div class="team-social-link">
                                <button class="controller">
                                    <i class="icofont-arrow-right"></i>
                                </button>

                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <i class="icofont-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <i class="icofont-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="icofont-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.vimeo.com/" target="_blank">
                                            <i class="icofont-vimeo"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Team Section ===-->

<!--=== Start Testimonial Section ===-->
<section class="testimonial-section ptb-100">
    <div class="container">
        <div class="main-section-title-wrap">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft delay-0-2s">
                    <div class="main-section-title left-title">
                        <span class="up-title">Our Testimonial</span>
                        <h2>This Best Testimonial Membar Of Meting Helped Succee</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Louasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
                </div>
            </div>
        </div>

        <div class="testimonial-slider owl-carousel owl-theme">
            <div class="main-testimonial-item">
                <img src="assets/images/testimonial/testimonial-1.jpg" alt="Image">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less this fsat normal distribution of to using 'Content here,</p>
                <h3>Juhon Dew</h3>
                <span>Founder</span>
                <ul>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                </ul>
            </div>

            <div class="main-testimonial-item">
                <img src="assets/images/testimonial/testimonial-2.jpg" alt="Image">
                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less this fsat normal distribution of to using 'Content here,</p>
                <h3>Adam Dew</h3>
                <span>Founder</span>
                <ul>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                    <li>
                        <i class="icofont-star"></i>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!--=== End Testimonial Section ===-->

<!--=== Start Video Section ===-->
<section class="video-section ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="video-content wow fadeInLeft delay-0-2s">
                    <span class="up-title">Our Watch Video</span>
                    <h2>We Have Calculations This Man Helped Succeed Service!</h2>
                    <p>Louasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores...</p>

                    <button class="main-btn">
                        <span>
                            Get a Quote
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
                        <span class="up-title">Our Largest Blog</span>
                        <h2>This Best Largest Blog Membar Of Helped Succee</h2>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight delay-0-2s">
                    <p>Louasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-2s">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-1.jpg" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>April 12, 2020</li>
                                <li>
                                    <a href="blog-details.html">Comments (03)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Presentation Buldint of Bulding Avoid Construcation Blog.</a>
                            </h3>
                            <p>Louasi architecto beatae vitae dicta sunt Nemo enim ipsam quia voluptas sit aut odit aut fugit this to...</p>
                            <a href="blog-details.html" class="main-detail-btn">
                                Read More
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-4s">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-2.jpg" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>April 12, 2020</li>
                                <li>
                                    <a href="blog-details.html">Comments (03)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Presentation Buldint of Bulding Avoid Construcation Blog.</a>
                            </h3>
                            <p>Louasi architecto beatae vitae dicta sunt Nemo enim ipsam quia voluptas sit aut odit aut fugit this to...</p>
                            <a href="blog-details.html" class="main-detail-btn">
                                Read More
                                <i class="icofont-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="main-blog-item wow fadeInUp delay-0-6s">
                    <a href="blog-details.html" class="blog-img">
                        <img src="assets/images/blog/blog-3.jpg" alt="Image">
                    </a>

                    <div class="blog-content hover-style">
                        <div class="inner-border">
                            <ul>
                                <li>April 12, 2020</li>
                                <li>
                                    <a href="blog-details.html">Comments (03)</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="blog-details.html">Presentation Buldint of Bulding Avoid Construcation Blog.</a>
                            </h3>
                            <p>Louasi architecto beatae vitae dicta sunt Nemo enim ipsam quia voluptas sit aut odit aut fugit this to...</p>
                            <a href="blog-details.html" class="main-detail-btn">
                                Read More
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
