@extends('layouts.dashboard-professional')
@section('content')
@if(Auth::user()->status == 0)
<style>
    .input-css {
    border-width: 3px; /* Augmente la taille de la bordure */
    border-style: solid; /* Type de la bordure */
    border-color: #b80e24; /* Couleur de la bordure */
    /* Autres styles CSS pour l'input */

}
</style>
@endif
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
            @if(Auth::user()->status == 0)
            <div class="alert alert-warning" role="alert">
             <span style="font-size: 15px;"> Veuillez envoyer , <a href="{{url('/professional/my-informations')}}" class="alert-link">Rc ou la carte d'artisan et le NIF </a></span>
            </div>
            @endif
             @if(Auth::user()->status == 1)
            <div class="alert alert-warning" role="alert">
             <span style="font-size: 15px;">Veuillez attendre la validation de votre compte !</span>
            </div>
            @endif
            </div>
            <div id="info-message" class="alert alert-warning" style="display:none;"></div>
        </div>
        <div class="row">
        @include('flash-message')
        </div>
        <form action="{{ url('/professional/my-informations/'.Auth::user()->id) }}" method="POST" enctype="multipart/form-data">

            @method('PUT')
            @csrf
        <div class="row ">
            <div class="col-xl-9 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Mes informations</h4>
                    </div>
                    <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nom complet* :</label>
                                    <input type="text" class="form-control input-default control-number @error('name') is-invalid @enderror " value="{{Auth::user()->name}}" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email* :</label>
                                    <input type="text" class="form-control input-default control-number @error('email') is-invalid @enderror" value="{{Auth::user()->email}}" name="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Téléphone* :</label>
                                    <input type="text" class="form-control input-default control-number @error('phone') is-invalid @enderror " value="{{Auth::user()->professional->phone}}" name="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Adresse* :</label>
                                    <input type="text" class="form-control input-default control-number @error('address') is-invalid @enderror" value="{{Auth::user()->professional->address}}" name="address">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Wilaya* :</label>
                                    <select  class="form-control @error('wilaya') is-invalid @enderror"  name="wilaya" required>
                                        @foreach($wilayas as $wilaya)
                                        <option value="{{ $wilaya->name }}" @if(Auth::user()->wilaya == $wilaya->name) selected @endif>{{ $wilaya->name }}</option>
                                        @endforeach
                                    </select>
                                        @error('wilaya')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Entreprise* :</label>
                                    <input type="text" class="form-control input-default control-number @error('entreprise') is-invalid @enderror " value="{{Auth::user()->professional->entreprise}}" name="entreprise">
                                    @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>NIF* :</label>
                                    <input type="text" class="form-control input-default control-number input-css @error('NIF') is-invalid @enderror" value="{{Auth::user()->professional->NIF}}" name="NIF" placeholder="NIF" @if(Auth::user()->status == 2) disabled @endif>
                                    @error('NIF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                               <div class="form-group col-md-6 "class="dropify-wrapper">
                                    <label>Photo RC ou Carte Artisan* :</label>
                                    <input type="file" class="form-control input-default control-number input-css @error('carte') is-invalid @enderror" id="myDropify" data-height="100" name="carte" value="{{ asset('/storage/professional/cartes/'.Auth::user()->professional->carte) }}" data-default-file="{{asset('/storage/professional/cartes/'.Auth::user()->professional->carte)}}" @if(Auth::user()->status == 2) disabled @endif required/>
                                    @if(Auth::user()->status == 2)
                                    <img src="{{ asset('/storage/professional/cartes/'.Auth::user()->professional->carte) }}" alt="Aperçu de l'image"  style="max-width: 200px; max-height: 200px;">
                                    @endif
                                    @error('carte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit"  class="btn btn-primary mt-3">Envoyer</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
<div class="modal fade" id="warning-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Important !</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Fermer</button>
                <a href="{{ asset('/professional/my-informations') }}" type="button" class="btn btn-primary btn-activer">Activer</a>
            </div>
        </div>
    </div>
</div>
@endsection
