@extends('layouts.front')
@section('content')
<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Evaporateurs</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Evaporateurs
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Products Section ===-->
<section class="products-section ptb-100">
    <div class="container">
        <div class="product-result">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                    <p><Span>06 </Span> Types evaporateurs</p>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="row">
                        <div class="col-lg-6">
                            <form>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="searchHere" placeholder="Rechercher">
                                    <label for="searchHere" class="form-label">Rechercher</label>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6">
                            <select class="form-select form-control" aria-label="Filtrer par">
                                <option selected>Filtrer par</option>
                                <option value="1">Bp Machine</option>
                                <option value="2">Hand Sanitizer</option>
                                <option value="3">Medicine</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('front/assets/images/products/product-1.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>
                           <h3>
                                <a href="#">
                                    Evaporateurs cubique
                                </a>
                            </h3>
                            <span class="price">Evaporateurs cubique EVS-C</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="#">
                            <img src="{{ asset('front/assets/images/products/product-2.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>
                            <h3>
                                <a href="#">
                                    Evaporateurs cubique
                                </a>
                            </h3>
                            <span class="price">Evaporateurs cubique EC</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('front/assets/images/products/product-3.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>
                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>
                            <h3>
                                <a href="product-details.html">
                                    Evaporateurs sur pieds
                                </a>
                            </h3>
                            <span class="price">Evaporateurs sur pieds ET</span>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('front/assets/images/products/product-4.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>

                            <h3>
                                <a href="product-details.html">
                                    Evaporateurs centrifuge
                                </a>
                            </h3>
                            <span class="price">Evaporateurs centrifuge EG</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('front/assets/images/products/product-5.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>
                            <h3>
                                <a href="product-details.html">
                                    Evaporateurs Double flux
                                </a>
                            </h3>
                            <span class="price">Evaporateurs Double flux EVD</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="main-product-item">
                    <div class="product-img">
                        <a href="product-details.html">
                            <img src="{{ asset('front/assets/images/products/product-6.png') }}" alt="Image">
                        </a>

                        <ul>
                            <li>
                                <a href="wishlist.html">
                                    <i class="icofont-heart-alt"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icofont-eye-alt"></i>
                                </a>
                            </li>
                        </ul>

                        <a href="{{asset('/detail-product')}}" class="main-btn">
                            <span class="btn-style">Voir</span>
                        </a>
                    </div>

                    <div class="main-product-content d-flex">
                        <div>

                            <h3>
                                <a href="product-details.html">
                                    Evaporateurs sur pieds
                                </a>
                            </h3>
                            <span class="price"> Evaporateurs sur pieds EP</span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!--=== End Products Section ===-->



@endsection
