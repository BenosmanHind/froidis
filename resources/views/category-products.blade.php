@extends('layouts.front')
@section('content')
<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Evaporateurs</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
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
                    <p><Span>{{ $count_product }} </Span> Types evaporateurs</p>
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
                                <option value="1">cubique</option>
                                <option value="2">centrifuge</option>
                                <option value="3">Double flux</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach($products as $product)
                <div class="col-lg-4 col-sm-6">
                    <div class="main-product-item">
                        <div class="product-img">
                            <a href="{{asset('product/'.$product->slug)}}">
                                <img src="{{ asset('storage/images/products/'.$product->images[0]->lien) }}" alt="Image">
                            </a>

                            <ul>
                                <li>
                                    <a style="cursor: pointer">
                                        <i class="icofont-heart-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a style="cursor: pointer">
                                        <i class="icofont-eye-alt"></i>
                                    </a>
                                </li>
                            </ul>

                            <a href="{{asset('product/'.$product->slug)}}" class="main-btn">
                                <span class="btn-style">Voir</span>
                            </a>
                        </div>

                        <div class="main-product-content d-flex">
                            <div>
                            <h3>
                                    <a style="cursor: pointer">
                                        {{ $product->designation }}
                                    </a>
                                </h3>
                                <span class="price">{{ $product->seconde_designation }}</span>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!--=== End Products Section ===-->



@endsection
