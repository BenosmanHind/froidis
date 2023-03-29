@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>professionnels</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/admin/customers')}}">professionnels</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
        <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Les professionnels</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Professionnel</th>
                                        <th>Téléphone</th>
                                        <th>Email</th>
                                        <th>Statut</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Benmouloud lahcene</td>
                                        <td>0552910692</td>
                                        <td>benmouloudlahcene@gmail.com</td>
                                        <td><span class="badge badge-warning">En attente</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fas fa-pencil-alt"></i></a>
                                               <button class="btn btn-danger shadow btn-xs sharp" ><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Baba Hamed chakir</td>
                                        <td>0792659812</td>
                                        <td>cahkir@gmail.com</td>
                                        <td><span class="badge badge-success">Validé</span></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-warning shadow btn-xs sharp mr-1"><i class="fas fa-pencil-alt"></i></a>
                                                <button class="btn btn-danger shadow btn-xs sharp" ><i class="fa fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


