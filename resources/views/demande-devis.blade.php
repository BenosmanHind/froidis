@extends('layouts.front')
@section('content')

<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2> Demander un devis</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Demander un devis
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
        <div class="col-lg-8 col-md-8 ps-0">
                <div class="sign-up-form">
                    <h2>Professionnels, demandez dès maintenant votre devi !</h2>
                    <p>Demandez dès maintenant votre devis pour les services de froid. Notre équipe expérimentée vous propose des solutions sur mesure pour la réfrigération,afin de répondre à vos besoins spécifiques.</p>
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
                                <div class="form-floating  form-group">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Pays " name="pays" value="{{ old('pays') }}" required>
                                    <label class="form-label">Pays</label>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-floating form-group">
                                    <select  class="form-control "  name="type" required>
                                    <option>Type de demande</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-floating form-group">
                                        <div class="form-floating">
                                            <textarea name="summary" id="summary" cols="30" rows="7" class="form-control textarea" placeholder="remarque..."></textarea>
                                            <label for="summary" class="form-label">remarque...</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="submit-btn">
                                    <button type="submit" class="main-btn">
                                        <span>Envoyer</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Sign Up Section ===-->
@endsection
