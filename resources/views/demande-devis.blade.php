@extends('layouts.front')
@section('content')
<style>
.large-textarea {
    width: 100%;
    height: 300px; /* Ajustez la hauteur selon vos besoins */
}
</style>
<!--=== Start Page Banner Section ===-->
<section class="page-banner-section bg-6">
    <div class="container">
        <div class="page-banner-content">
            <h2> Parlez-nous de votre projet</h2>
            <ul>
                <li>
                    <a href="{{ asset('/') }}">Accueil</a>
                </li>
                <li style="color: #ffff">
                    Votre projet
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
                        <h2>Parlez-nous de votre projet !</h2>
                        <p>Découvrez dès à présent nos offres de services en matière de froid. Notre équipe compétente est là pour vous proposer des solutions adaptées à vos besoins en réfrigération.</p>
                        <form class="form-wrap" method="POST" action="{{ asset('project-talk') }}" enctype="multipart/form-data">
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
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Votre numéro *" name="phone" value="{{ old('phone') }}" required>
                                                <label class="form-label">Votre numéro *</label>
                                                    @error('phone')
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
                                                <input type="text" class="form-control @error('email') is-invalid @enderror"  placeholder="Votre email *" name="email" value="{{ old('email') }}" required autocomplete="email">
                                                <label  class="form-label">Votre email *</label>
                                                    @error('email')
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
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('company') is-invalid @enderror" placeholder="Société " name="company" value="{{ old('company') }}" >
                                                <label class="form-label">Entreprise</label>
                                                    @error('company')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating form-group">
                                                <select  class="form-control " style="padding-top: 0px !important ;padding-bottom : 0px !important;" name="type" required>
                                                <option selected disabled>Secteur d'activité</option>
                                                <option value="Fruits et légumes">Fruits et légumes</option>
                                                <option value="Viandes et poissons">Viandes et poissons</option>
                                                <option value="Produits laitiers">Produits laitiers</option>
                                                <option value="Boissons">Boissons</option>
                                                <option value="Autres">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--
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
                                                    <input class="form-check-input" type="radio" name="chambre_froide" id="inlineRadio2" value="1" checked>
                                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 14px">Oui</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="chambre_froide" id="inlineRadio1" value="0">
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
                                        <div class="col-lg-6">
                                            <div class=" form-group">
                                                <label for="youName" class="form-label">est-ce que vous avez un technicien ?</label>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="technicien" id="inlineRadio2" value="1" checked>
                                                    <label class="form-check-label" for="inlineRadio2" style="font-size: 14px">Oui</label>
                                                  </div>
                                                  <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="technicien" id="inlineRadio1" value="0">
                                                    <label class="form-check-label" for="inlineRadio1" style="font-size: 14px">Non</label>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
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
                                        <div class="col-lg-4">
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
                                        <div class="col-lg-4">
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
                                        <div class="col-lg-4">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('longeur') is-invalid @enderror" placeholder="Longueur (m)" name="longueur" value="{{ old('longueur') }}" required>
                                                <label class="form-label">Longueur (m)</label>
                                                    @error('longueur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('largeur') is-invalid @enderror" placeholder="Largeur (m)" name="largeur" value="{{ old('largeur') }}" required>
                                                <label class="form-label">Largeur (m)</label>
                                                    @error('largeur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-floating form-group">
                                                <input type="text" class="form-control @error('hauteur') is-invalid @enderror" placeholder="Hauteur (m)" name="hauteur" value="{{ old('hauteur') }}" required>
                                                <label class="form-label">Hauteur (m)</label>
                                                    @error('hauteur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-group">
                                                <select  class="form-control"  name="type_denre" required>
                                                <option value="Fruits et légumes">Fruits et légumes</option>
                                                <option value="Viandes et poissons">Viandes et poissons</option>
                                                <option value="Produits laitiers">Produits laitiers</option>
                                                <option value="Boissons">Boissons</option>
                                                <option value="Autres">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            --}}
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title">Envoyer un document</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-group">
                                                <div class="form-floating">
                                                    <input type="file" class="form-control" placeholder="Société " name="file" >
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h5 class="card-title">Détails de votre projet</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating form-group">
                                                <div class="form-floating">
                                                    <textarea name="note" cols="30" rows="10"  class="form-control textarea large-textarea" placeholder="remarque..."></textarea>
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
      // Sélectionnez les éléments de case à cocher "Oui" et "Non"
      var ouiCheckbox = $('#inlineRadio2');
      var nonCheckbox = $('#inlineRadio1');
      // Sélectionnez le div que vous voulez masquer
      var marqueDiv = $('.marque');

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

      // Écoutez les changements d'état de la case à cocher "Oui"
      ouiCheckbox.change(function() {
        if (ouiCheckbox.is(':checked')) {
          // Si "Oui" est coché, affichez le div
          marqueDiv.show();
        }
      });
    });
    </script>
@endpush
