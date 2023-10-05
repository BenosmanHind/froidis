@extends('layouts.front')
@section('content')
<style>
    .btn-mail{
        background-color: #174587 !important;
        border-color: #174587;
    }
</style>
<section class="payment-area bg-color-fefefe ptb-100">
    <div class="container">
        <div class="main-section-title">
            <span class="up-title">Succès</span>
            <h2>Email envoyé !</h2>
            <div class="row page-titles mx-0">
                <div class="col-lg-12">
                    <div class="text-center alert alert-primary"   role="alert">
                        <p class="mt-3" style="font-size: 15px;">Nous avons bien reçu votre e-mail et nous vous répondrons dans les plus brefs délais. Merci de nous avoir contacté ! </p>
                        <a  href="{{url('/')}}" type="button" style="margin-top:20px;" class="btn btn-primary btn-mail" style="background-color: #174587 !important">Page d'acceuil</a>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection
