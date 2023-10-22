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
            <div class="col-lg-9 col-md-9 ps-0">
                <div class="sign-up-form">
                        <h2>Demandez dès maintenant votre devi !</h2>
                        <p>Demandez dès maintenant votre devis pour les services de froid. Notre équipe expérimentée vous propose des solutions sur mesure pour la réfrigération,afin de répondre à vos besoins spécifiques.</p>
                        <form class="form-wrap" method="POST" action="{{ asset('demande-devis') }}">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Profile client</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control  @error('name') is-invalid @enderror" id="youName" name="name" placeholder="Votre nom *" value="{{ old('name') }}" required>
                                                <label for="youName" class="form-label">Nom complet *</label>
                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <select  class="form-control "  name="type" required>
                                                <option>Vous êtes</option>
                                                <option value="0">Installateur</option>
                                                <option value="1">Particulier</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre numéro *" name="phone" value="{{ old('phone') }}" required>
                                                <label class="form-label">Votre numéro *</label>
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Votre email *" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <label  class="form-label">Votre email *</label>
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
                                                <input type="text" class="form-control @error('company') is-invalid @enderror" placeholder="Société " name="company" value="{{ old('company') }}" >
                                                <label class="form-label">Société</label>
                                                    @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating  form-group">
                                                <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Adresse * " name="address" value="{{ old('address') }}" required>
                                                <label class="form-label">Adresse *</label>
                                                    @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title">D'autres informations</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class=" form-group">
                                                <label for="youName" class="form-label">Avez vous déja une chambre froide ?</label>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="1" checked>
                                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 14px">Oui</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="0">
                                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 14px">Non</label>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 marque">
                                           <div class="form-floating form-group">
                                            <input type="text" class="form-control" placeholder="Le groupe et évaporateur de quelle marque " name="volume" value="{{ old('volume') }}" >
                                            <label class="form-label">Le groupe et évaporateur de quelle marque ?</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('volume') is-invalid @enderror" placeholder="Volume (m³)" name="volume" value="{{ old('volume') }}" required>
                                                <label class="form-label">Volume (m³)</label>
                                                    @error('volume')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('dimension') is-invalid @enderror" placeholder="Dimension (m)" name="dimension" value="{{ old('dimension') }}" required>
                                                <label class="form-label">Dimension (m)</label>
                                                    @error('dimension')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('nbr_chambre') is-invalid @enderror" placeholder="Nombre de chambres" name="nbr_chambre" value="{{ old('nbr_chambre') }}" required>
                                                <label class="form-label">Nombre de chambres</label>
                                                    @error('nbr_chambre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('temperature') is-invalid @enderror" placeholder="Température voulus" name="temperature" value="{{ old('temperature') }}" required>
                                                <label class="form-label">Température voulus</label>
                                                    @error('temperature')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating  form-group">
                                                <input type="text" class="form-control @error('type_denre') is-invalid @enderror" placeholder="Type de denrés " name="type_denre" value="{{ old('type_denre') }}" required>
                                                <label class="form-label">Type de denrés</label>
                                                    @error('type_denre')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title">Proposition et autres informations</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-group">
                                                <div class="form-floating">
                                                    <textarea name="note" id="summary" cols="30" rows="7" class="form-control textarea" placeholder="remarque..."></textarea>
                                                    <label for="summary" class="form-label">...........</label>
                                                </div>
                                            </div>
                                        </div>
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
                        </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=== End Sign Up Section ===-->
@endsection
@push('hide-marque-script')
<script>
    $(document).ready(function() {
      // Sélectionnez l'élément de case à cocher "Non"
      var nonCheckbox = $('#inlineRadio1');
      // Sélectionnez le div que vous voulez masquer
      var marqueDiv = $('.marque');

      // Cachez initialement le div si "Non" est coché au chargement de la page
      if (nonCheckbox.is(':checked')) {
        marqueDiv.hide();
      }

      // Écoutez les changements d'état de la case à cocher "Non"
      nonCheckbox.change(function() {
        if (nonCheckbox.is(':checked')) {
          // Si "Non" est coché, cachez le div
          marqueDiv.hide();
        } else {
          // Sinon, affichez le div
          marqueDiv.show();
        }
      });
    });
    </script>
@endpush
