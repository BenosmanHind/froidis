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
            <h2>Evaporateurs cubique</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li style="color:#fff">
                   {{$product->designation}}
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Product Details Section ===-->
<div class="product-details-area default-shape bg-color-linear-3 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="article-carousel owl-carousel owl-theme">
                    @foreach($product->images as $image)
                    <div class="item">
                        <img src="{{ asset('storage/images/products/'.$image->lien) }}" alt="Image">
                    </div>
                    @endforeach
            </div>
            </div>

            <div class="col-lg-6">


                <div class="product-details-main-content">


                    <h3>{{ $product->seconde_designation }}</h3>


                    <div class="client-review">
                        <div class="rating">
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                            <i class="icofont-star"></i>
                        </div>
                        <a href="product-details.html" class="total-reviews">(6 avis)</a>
                    </div>

                        <p>
                       {{$product->short_description}}
                        </p>

                        <div class="mb-4">
                            <img height="30%" width="30%" src="data:image/png;base64,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" alt="">

                        </div>
                    <ul class="quantity-add-wish d-flex align-items-center">
                       <li>
                            <button type="submit" class="main-btn">
                                <span>Demander un devis</span>
                            </button>
                        </li>
                    </ul>


                </div>
            </div>

            <div class="col-lg-12 col-md-12">
                <div class="tab product-details-tab pt-100">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional" type="button" role="tab" aria-controls="additional" aria-selected="true">Models</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instuctions-tab" data-bs-toggle="tab" data-bs-target="#instuctions" type="button" role="tab" aria-controls="instuctions" aria-selected="true">Documents</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Avis <span>(6)</span></button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <p><strong>Batterie</strong></p>

<ul>
	<li>-Ailettes en aluminium &agrave; profil gaufr&eacute; pour augmenter l&rsquo;&eacute;change.</li>
	<li>-Echange maximal avec une dimension compacte.</li>
	<li>-Tube en cuivre rainur&eacute; &agrave; haut rendement, diam&egrave;tre 9,52 mm.</li>
	<li>-Distributeur venturi pour une alimentation optimale.</li>
	<li>-Ecartement des ailettes selon l&rsquo;application : 4,2 - 6,3mm.</li>
</ul>

<p><strong>Ventilateurs</strong></p>

<ul>
	<li>-Moteur Shaded-pole Class B IP42 c&acirc;bl&eacute;s &agrave; une bo&icirc;te interne &eacute;tanche.</li>
	<li>-H&eacute;lice en aluminium et grille de protection conformes aux normes.</li>
	<li>-&Oslash; 230-300 : 220V-1Ph-50Hz.</li>
</ul>

<p><strong>Carrosserie</strong></p>

<ul>
	<li>-Hauteur faible et design compact pour mieux exploiter les espaces.</li>
	<li>-Surfaces lisses et plis arrondis conformes aux directives HACCP</li>
</ul>

<p><strong>Alimentaires.</strong></p>

<ul>
	<li>-T&ocirc;le en acier galvanis&eacute;e et peinture en poudre polyester RAL9010.</li>
	<li>-Panneaux et bac principal rabattables avec charni&egrave;res.</li>
	<li>-Contre bac pour &eacute;viter l&rsquo;effet de la condensation.</li>
	<li>-Installation facile, maintenance et nettoyage simplifi&eacute;.</li>
	<li>D&eacute;givrage</li>
	<li>-Electrique en standard, pour des temp&eacute;ratures inf&eacute;rieures &agrave; +2&deg;C,</li>
	<li>avec un temps de d&eacute;givrage tr&egrave;s rapide et une temp&eacute;rature</li>
	<li>de surface tr&egrave;s basse.</li>
	<li>-El&eacute;ments chauffants en acier inoxydable batterie et contre bac.</li>
	<li>-Raccordement des r&eacute;sistances &agrave; une bo&icirc;te &eacute;tanche.</li>
</ul>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="product-additional-info">
                                <table class="table table-striped table-bordered"><tr><td>Modéles</td><td>Kw</td><td>A230-1</td><td>A 400-3</td><td>Nb Ω</td><td>L</td><td>H</td><td>P</td><td>X</td><td>Y</td><td>R</td><td>In</td><td>Out</td><td>Ø GAS</td><td>Kg</td></tr><tr><td>EVS 02L 1F</td><td style="text-align: right">0,3</td><td style="text-align: right">1,4</td><td>_</td><td style="text-align: right">2+0</td><td style="text-align: right">590</td><td style="text-align: right">225</td><td style="text-align: right">515</td><td style="text-align: right">420</td><td style="text-align: right">545</td><td style="text-align: right">85</td><td style="text-align: right">9,5</td><td style="text-align: right">9,5</td><td>1''</td><td style="text-align: right">20</td></tr><tr><td>EVS 03L 1F</td><td style="text-align: right">0,3</td><td style="text-align: right">1,4</td><td>_</td><td style="text-align: right">2+0</td><td style="text-align: right">590</td><td style="text-align: right">225</td><td style="text-align: right">515</td><td style="text-align: right">420</td><td style="text-align: right">545</td><td style="text-align: right">85</td><td style="text-align: right">9,5</td><td style="text-align: right">9,5</td><td>1''</td><td style="text-align: right">20</td></tr><tr><td>EVS 04L 1F</td><td style="text-align: right">0,5</td><td style="text-align: right">2,1</td><td>_</td><td style="text-align: right">2+0</td><td style="text-align: right">790</td><td style="text-align: right">225</td><td style="text-align: right">515</td><td style="text-align: right">620</td><td style="text-align: right">545</td><td style="text-align: right">85</td><td style="text-align: right">9,5</td><td style="text-align: right">9,5</td><td>1''</td><td style="text-align: right">23</td></tr><tr><td>EVS 05L 2F</td><td style="text-align: right">0,7</td><td style="text-align: right">3,2</td><td>_</td><td style="text-align: right">2+0</td><td style="text-align: right">1170</td><td style="text-align: right">225</td><td style="text-align: right">515</td><td style="text-align: right">920</td><td style="text-align: right">545</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">16</td><td>1''</td><td style="text-align: right">30</td></tr><tr><td>EVS 07L 3F</td><td style="text-align: right">0,9</td><td style="text-align: right">4,3</td><td>_</td><td style="text-align: right">2+0</td><td style="text-align: right">1470</td><td style="text-align: right">225</td><td style="text-align: right">515</td><td style="text-align: right">1220</td><td style="text-align: right">545</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">16</td><td>1''</td><td style="text-align: right">40</td></tr><tr><td>EVS 05L 1F</td><td style="text-align: right">1,2</td><td style="text-align: right">5,5</td><td>_</td><td style="text-align: right">1+1</td><td style="text-align: right">870</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">620</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">16</td><td>1''</td><td style="text-align: right">23</td></tr><tr><td>EVS 07L 1F</td><td style="text-align: right">1,2</td><td style="text-align: right">5,5</td><td>_</td><td style="text-align: right">1+1</td><td style="text-align: right">1070</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">820</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">16</td><td>1''</td><td style="text-align: right">26</td></tr><tr><td>EVS 10L 2F</td><td style="text-align: right">2,2</td><td style="text-align: right">10</td><td>_</td><td style="text-align: right">1+1</td><td style="text-align: right">1470</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">1220</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">19</td><td>1''</td><td style="text-align: right">38</td></tr><tr><td>EVS 15L 2F</td><td style="text-align: right">2</td><td style="text-align: right">9,1</td><td>_</td><td style="text-align: right">1+1</td><td style="text-align: right">1620</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">1370</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">12,7</td><td style="text-align: right">19</td><td>1''</td><td style="text-align: right">42</td></tr><tr><td>EVS 20L 3F</td><td style="text-align: right">3,2</td><td>_</td><td style="text-align: right">6,9</td><td style="text-align: right">1+1</td><td style="text-align: right">2070</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">1820</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">16</td><td style="text-align: right">22</td><td>1''</td><td style="text-align: right">54</td></tr><tr><td>EVS 25L 3F</td><td style="text-align: right">3,6</td><td>_</td><td style="text-align: right">7,8</td><td style="text-align: right">1+1</td><td style="text-align: right">2295</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">2045</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">16</td><td style="text-align: right">22</td><td>1''</td><td style="text-align: right">62</td></tr><tr><td>EVS 30L 4F</td><td style="text-align: right">4,2</td><td>_</td><td style="text-align: right">9,1</td><td style="text-align: right">1+1</td><td style="text-align: right">2670</td><td style="text-align: right">250</td><td style="text-align: right">545</td><td style="text-align: right">2420</td><td style="text-align: right">570</td><td style="text-align: right">125</td><td style="text-align: right">16</td><td style="text-align: right">22</td><td>1''</td><td style="text-align: right">72</td></tr></table>


                            </div>
                        </div>

                        <div class="tab-pane fade" id="instuctions" role="tabpanel" aria-labelledby="instuctions-tab">
                            <div class="product-instructions-info">
                                <ul>
                                    Cliquez sur le lien pour télécharger la fiche technique :
                                     @foreach($product->documents as $document)
                                        <li class="mt-4">
                                            <a href="{{ asset('telecharger-pdf/'.$document->document) }}"> {{ $product->seconde_designation }}</a>
                                        </li>
                                     @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="product-review-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="review-progress-wrap">
                                            <h3>Customer reviews</h3>

                                            <ul class="total-review">
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

                                            <div class="progresss-bar">
                                                <span class="star">5 Star</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="count">90</span>
                                            </div>

                                            <div class="progresss-bar">
                                                <span class="star">4 Star</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="count">70</span>
                                            </div>

                                            <div class="progresss-bar">
                                                <span class="star">3 Star</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="count">50</span>
                                            </div>

                                            <div class="progresss-bar">
                                                <span class="star">2 Star</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="count">30</span>
                                            </div>

                                            <div class="progresss-bar">
                                                <span class="star">1 Star</span>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-label="Success example" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <span class="count">10</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="product-review-form">
                                            <form>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="firstName" placeholder="First name" value="" required="">
                                                            <label for="firstName" class="form-label">First name</label>
                                                            <div class="invalid-feedback"> Valid first name is required.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="lastName" placeholder="Last name" value="" required="">
                                                            <label for="lastName" class="form-label">Last name</label>
                                                            <div class="invalid-feedback"> Valid Last name is required.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="email" placeholder="Email" value="" required="">
                                                            <label for="email" class="form-label">Email</label>
                                                            <div class="invalid-feedback"> Valid Email is required.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="text" class="form-control" id="review" placeholder="Review Title" value="" required="">
                                                            <label for="review" class="form-label">Review Title</label>
                                                            <div class="invalid-feedback"> Valid review is required.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="form-floating"><grammarly-extension data-grammarly-shadow-root="true" style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension><grammarly-extension data-grammarly-shadow-root="true" style="mix-blend-mode: darken; position: absolute; top: 0px; left: 0px; pointer-events: none;" class="cGcvT"></grammarly-extension>
                                                            <textarea name="comment" id="comment" cols="30" rows="7" class="form-control textarea" placeholder="Write Your Comment" spellcheck="false"></textarea>
                                                            <label for="comment" class="form-label">Write Your Comment</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <ul class="review-list-wrap">
                                    <li class="review-list d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-1.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Alux</h4>
                                            <span>14 Sep, 2022 at 12.58 AM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li class="review-list review-replay d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-2.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Juhon</h4>
                                            <span>07 Sep, 2022 at 09.01 AM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li class="review-list d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-3.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Anne</h4>
                                            <span>28 Sep, 2022 at 03.58 AM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li class="review-list review-replay d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-4.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Akes</h4>
                                            <span>22 Sep, 2022 at 01.58 PM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li class="review-list d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-5.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Zeck</h4>
                                            <span>16 Sep, 2022 at 10.00 AM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li class="review-list review-replay d-flex">
                                        <div class="review-img">
                                            <img src="assets/images/review/review-6.jpg" alt="Image">
                                        </div>

                                        <div class="review-content">
                                            <h4>Dr. Lubks</h4>
                                            <span>20 Sep, 2022 at 11.58 AM</span>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis explicabo deleniti mollitia reprehenderit illo quo consequuntur eos, id facere, expedita quasi, quisquam veniam molestiae. Sint repellat voluptatum ab eligendi tempora.</p>

                                            <ul class="total-reviews">
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

                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </li>

                                    <li>
                                        <nav>
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a href="#" class="page-link">
                                                        <i class="icofont-simple-left"></i>
                                                    </a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link" aria-current="page">1</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link active">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">
                                                        <i class="icofont-simple-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=== End Product Details Section ===-->
@endsection
