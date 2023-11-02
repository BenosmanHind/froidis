@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4 >Bonjour, bienvenue !</h4>
                    <span>Détails professionnel</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/admin') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Détails professionnel</a></li>
                </ol>
            </div>
        </div>
        <div class="row col">
                <div class="card col-md-4 mr-4">
                    <div class="card-body">
                        <div class="basic-form">
                            <h5><span class="badge mb-4" style="background-color: #3a7afe;color: #ffff">Infos professionnel :</span> </h5>
                            <h5>Wilaya : <b style="color: #3a7afe;"> {{$user->professional->wilaya}}</b></h5>
                            <h5>Adresse : <b style="color: #3a7afe;"> {{$user->professional->address}}</b></h5>
                            <h5>Entreprise : <b style="color: #3a7afe;"> {{$user->professional->entreprise}}</b></h5>
                            <h5>NIF : <b style="color: #3a7afe;"> {{$user->professional->NIF}}</b></h5>
                            <h5>RC : <b style="color: #3a7afe;"> {{$user->professional->RC}}</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5><span class="badge mb-4 mt-3 " style="background-color: #3a7afe;color: #ffff">Carte artisanale ou registre de commerce :</span> </h5>
                            <div class="form-row">
                               <div class="form-col-4">
                                    <a href="{{url('storage/professional/cartes/'.$user->professional->carte)}}"> <img src="{{url('storage/professional/cartes/'.$user->professional->carte)}}"  height="100px" width="250px" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
