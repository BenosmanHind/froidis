@extends('layouts.dashboard-admin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>Actialités</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/editeur') }}">Editeur</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Actualités</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter actualité</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{url('admin/actualites')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Titre* :</label>
                                        <input type="text" class="form-control input-default " name="title" placeholder="Titre" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Date* :</label>
                                        <input type="date" class="form-control input-default " name="date"  required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Déscription* :</label>
                                        <textarea class="form-control" rows="4" id="comment" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>lien :</label>
                                        <input type="text" class="form-control input-default " name="link" placeholder="Titre" >
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Image principale * :</label>
                                        <div class="basic-form custom_file_input">
                                            <div class="input-group mb-3">
                                                <input type="file" class="image" multiple name="photo" accept="image/*" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Photos* :</label>
                                        <div class="basic-form custom_file_input">
                                            <div class="input-group mb-3">
                                                <input type="file" class="image" multiple name="photos[]" accept="image/*"  multiple>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary mt-3">Ajouter</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
