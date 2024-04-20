@extends('layouts.dashboard-professional')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, bienvenue!</h4>
                    <span>Mes informations</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/professional')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Mes informations</a></li>
                </ol>
            </div>
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
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Entreprise* :</label>
                                    <input type="text" class="form-control input-default control-number @error('entreprise') is-invalid @enderror " value="{{Auth::user()->professional->entreprise}}" name="entreprise">
                                    @error('entreprise')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Photo RC ou Carte Artisan* :</label>
                                    <input type="file" class="form-control input-default control-number @error('carte') is-invalid @enderror" name="carte">
                                    @error('carte')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>NIF* :</label>
                                    <input type="text" class="form-control input-default control-number @error('NIF') is-invalid @enderror" value="{{Auth::user()->professional->NIF}}" name="NIF">
                                    @error('NIF')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Numéro RC* :</label>
                                    <input type="text" class="form-control input-default control-number @error('RC') is-invalid @enderror" value="{{Auth::user()->professional->RC}}" name="RC">
                                    @error('RC')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit"  class="btn btn-primary mt-3">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection
