@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Réinitialisation du mot de passe</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Réinitialisation du mot de passe
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
                    <h2>Bienvenue!</h2>
                    <p>Merci de saisir les informations pour réinitialiser le mot de passe </p>
                    <form class="login-wrapper-contents-form custom-form" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-floating form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Votre email" name="email" value="{{ old('email') }}" required autocomplete="email">
                            <label  class="form-label">Votre email</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-floating form-group mt-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-field1" placeholder="Your Password"name="password" value=""required autocomplete="new-password">
                            <label for="password-field1" class="form-label">Mot de passe</label>
                            <span toggle="#password-field1" class="icofont-eye-alt field-icon toggle-password"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="form-floating form-group mt-3">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password-field1" placeholder="Confirmer le mot de passe" name="password_confirmation" required>
                            <label for="password-field1" class="form-label">Confirmer le mot de passe</label>
                            <span toggle="#password-field1" class="icofont-eye-alt field-icon toggle-password"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="submit-btn">
                        <button type="submit" class="main-btn">
                                <span>Réinitialisation</span>
                        </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Sign Up Section ===-->
@endsection
