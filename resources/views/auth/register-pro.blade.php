@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2>Inscription</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Inscription
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
        <div class="col-lg-9 col-md-9 ps-0">
                <div class="sign-up-form">
                    <h2>Professionnels, inscrivez-vous dès maintenant !</h2>
                    <p>Rejoignez notre plateforme dès maintenant pour bénéficier d'un accès exclusif à des produits de qualité, des services personnalisés et des conseils d'experts en froid industriel.</p>
                    <form class="form-wrap" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control  @error('name') is-invalid @enderror" id="youName" name="name" placeholder="Votre nom" value="{{ old('name') }}" required>
                                    <label for="youName" class="form-label">Nom complet</label>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Votre email" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <label  class="form-label">Votre email</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre numéro" name="phone" value="{{ old('phone') }}" required>
                                    <label class="form-label">Votre numéro</label>
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('entreprise') is-invalid @enderror" placeholder="Entreprise " name="entreprise" value="{{ old('entreprise') }}" required>
                                    <label class="form-label">Entreprise</label>
                                        @error('entreprise')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <select  class="form-control @error('wilaya') is-invalid @enderror"  name="wilaya" required>
                                        @foreach($wilayas as $wilaya)
                                        <option>{{ $wilaya->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('wilaya')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Adresse " name="address" value="{{ old('address') }}" required>
                                    <label class="form-label">Adresse</label>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('NIF') is-invalid @enderror"  placeholder="NIF" name="NIF" value="{{ old('NIF') }}" required>
                                    <label  class="form-label">NIF</label>
                                        @error('NIF')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="text" class="form-control @error('RC') is-invalid @enderror"  placeholder="RC" name="RC" value="{{ old('RC') }}" required>
                                    <label  class="form-label">RC</label>
                                        @error('RC')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
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
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Your Password" value="" required autocomplete="new-password">
                                    <label for="password-field" class="form-label">Confirmer le mot de passe</label>
                                    <span toggle="#password-field" class="icofont-eye-alt field-icon toggle-password"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="submit-btn">
                                    <button type="submit" class="main-btn">
                                        <span>Envoyer</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <p class="already">Vous avez déja un compte? <a href="{{asset('/login')}}">Connectez-vous</a></p>

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
