@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Evaporateurs cubique</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li>
                    Evaporateurs cubique
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
                <div class="product-main-image">
                    <img src="{{ asset('images/img-1.png') }}" alt="Image">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="product-details-main-content">
                    <h3>EVS-C Evaporateurs cubique</h3>

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

                        Batterie<br>
                        -Ailettes en aluminium à profil gaufré pour augmenter l’échange.<br>
                        -Echange maximal avec une dimension compacte.<br>
                        -Tube en cuivre rainuré à haut rendement, diamètre 9,52 mm.<br>
                        -Distributeur venturi pour une alimentation optimale.<br>
                        -Ecartement des ailettes selon l’application : 4,2 – 6,3mm.<br>

                        Carrosserie<br>
                        -Hauteur faible et design compact pour mieux exploiter les espaces.<br>
                        -Surfaces lisses et plis arrondis conformes aux directives HACCP
                        alimentaires.<br>
                        -Tôle en acier galvanisée et peinture en poudre polyester RAL9010.<br>
                        -Panneaux et bac principal rabattables avec charnières.<br>
                        -Contre bac pour éviter l’effet de la condensation.<br>
                        -Installation facile, maintenance et nettoyage simplifié.<br>
                        </p>
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
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab" data-bs-target="#additional" type="button" role="tab" aria-controls="additional" aria-selected="true">Additional info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="instuctions-tab" data-bs-toggle="tab" data-bs-target="#instuctions" type="button" role="tab" aria-controls="instuctions" aria-selected="true">Care Instructions</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews <span>(6)</span></button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                            <div class="product-details-description-content">
                                <p>
                                   Ventilateurs<br>
                                    -Moteur Shaded-pole Class B IP42 câblés à une boîte interne étanche.<br>
                                    -Hélice en aluminium et grille de protection conformes aux normes.<br>
                                    -Ø 230-300 : 220V-1Ph-50Hz.<br>

                                    Dégivrage<br>
                                    -Electrique en standard, pour des températures inférieures à +2°C,
                                    avec un temps de dégivrage très rapide et une température
                                    de surface très basse.<br>
                                    -Eléments chauffants en acier inoxydable batterie et contre bac.<br>
                                    -Raccordement des résistances à une boîte étanche.<br>
                                    </p>

                                <h4 class="mt-4">Best Product:</h4>
                                <p class="mb-4">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adlino minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit corporis voluptates ullam, amet nihil, magni consequatur repellendus, distinctio debitis saepe non ut explicabo voluptate quae accusamus dolores soluta beatae officia.</p>

                                <div class="row justify-content-center">
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="best-product">
                                            <img src="assets/images/products/product-1.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="best-product">
                                            <img src="assets/images/products/product-2.jpg" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-4">
                                        <div class="best-product">
                                            <img src="assets/images/products/product-3.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>

                                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim adlino minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates quisquam accusamus deserunt tenetur error hic distinctio quidem asperiores dolores. Esse vel ut corrupti natus! Temporibus laudantium in tempore blanditiis doloribus!</p>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="product-additional-info">
                                <div class="table-responsive">
                                    <table class="table info-table">
                                        <tbody>
                                            <tr>
                                                <td>Specialty</td>
                                                <td>Themeforest</td>
                                            </tr>
                                            <tr>
                                                <td>Ingredient Type</td>
                                                <td>Themeforest</td>
                                            </tr>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Crop Theme</td>
                                            </tr>
                                            <tr>
                                                <td>Package Information</td>
                                                <td>Box</td>
                                            </tr>
                                            <tr>
                                                <td>Manufacturer</td>
                                                <td>Prayagh Nutri Product Crop Theme Ltd</td>
                                            </tr>
                                            <tr>
                                                <td>Item part number</td>
                                                <td>LE 014 - 20pcs Crème Bakes (Pack of 2)</td>
                                            </tr>
                                            <tr>
                                                <td>Net Quantity</td>
                                                <td>40.00 count</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="instuctions" role="tabpanel" aria-labelledby="instuctions-tab">
                            <div class="product-instructions-info">
                                <ul>
                                    <li>
                                        Store cream Pressure Machine in a refrigerator. Fondant Pressure Machine should be stored in an air conditioned environment.
                                    </li>
                                    <li>
                                        Slice and serve the Pressure Machine at room temperature and make sure it is not exposed to heat.
                                    </li>
                                    <li>
                                        Use a serrated knife to cut a fondant Pressure Machine.
                                    </li>
                                    <li>
                                        Sculptural elements and figurines may contain wire supports or toothpicks or wooden skewers for support.
                                    </li>
                                    <li>
                                        Please check the placement of these items before serving to small children.
                                    </li>
                                    <li>
                                        The Pressure Machine should be consumed within 24 hours.
                                    </li>
                                    <li>
                                        Enjoy your Pressure Machine!
                                    </li>
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
