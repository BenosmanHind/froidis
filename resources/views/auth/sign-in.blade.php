@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Inscription</h2>
            <ul>
                <li>
                    <a href="index.html">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Connexion
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=== End Page Banner Section ===-->

<!--=== Start Sign Up Section ===-->
<section class="sign-up-section ptb-100">
    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 ps-0">
                <div class="sign-up-form">
                    <h2>Connectez-vous !</h2>
                    <p>Merci de saisir les informations pour se connecter </p>
                    <form class="form-wrap" method="GET" action="{{ asset('/customers') }}">
                        @csrf
                       

                        <div class="form-floating form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Votre email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label  class="form-label">Votre email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        

                        <div class="form-floating form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-field1" placeholder="Your Password"name="password" value=""required autocomplete="new-password">
                            <label for="password-field1" class="form-label">Mot de passe</label>
                            <span toggle="#password-field1" class="icofont-eye-alt field-icon toggle-password"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>

                       
                        <div class="submit-btn">
                           <a href="{{asset('/admin')}}"> <button type="submit" class="main-btn">
                                <span>Connexion</span>
                            </button></a>
                        </div>

                        <p class="already">Vous n'avez pas de compte? <a href="{{asset('/register-pro')}}">Inscrivez-vous</a></p>

                        <span class="or">Réseaux sociaux</span>

                        <ul class="footer-social-link">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank" class="hover-style">
                                    <span class="inner-border">
                                        <i class="icofont-facebook"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank" class="hover-style">
                                    <span class="inner-border">
                                        <i class="icofont-linkedin"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank" class="hover-style">
                                    <span class="inner-border">
                                        <i class="icofont-instagram"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Sign Up Section ===-->
@endsection
