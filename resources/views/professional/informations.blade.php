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
        <form action="{{url('admin/cart-promo')}}" method="POST" id="addProduct" enctype="multipart/form-data">
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
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->name}}" name="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->email}}" name="email">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Téléphone* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->professional->phone}}" name="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Adresse* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->professional->address}}" name="address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Entreprise* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->professional->entreprise}}" name="entreprise">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>NIF* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->professional->NIF}}" name="NIF">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>RC* :</label>
                                    <input type="text" class="form-control input-default control-number " value="{{Auth::user()->professional->RC}}" name="RC">
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
