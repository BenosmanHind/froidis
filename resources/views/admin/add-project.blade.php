@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, bienvenue!</h4>
                    <span>Ajouter Projet</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Ajouter projet</a></li>
                </ol>
            </div>
        </div>
        <form action="{{url('admin/projects')}}" method="POST" id="addProduct" enctype="multipart/form-data">
        @csrf
        <div class="row ">
            <div class="col-xl-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Ajouter projet</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Titre*:</label>
                                <input type="text"  class="form-control input-default" value="{{old('title')}}" name="title" id="title" placeholder="Titre" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Flag:</label>
                                <input type="text" class="form-control input-default" value="{{old('flag')}}" name="flag" placeholder="0" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Photos*:</label>
                                <input type="file" class="form-control input-default"  name="photos[]" multiple required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3 col-md-12">
                                 <label>Wilayas *:</label>
                                 <select class="form-control selectpicker" data-live-search="true" name="wilaya" >
                                    <option value="0">Séléctionner la wilaya</option>
                                    @foreach($wilayas as $wilaya)
                                    <option value="{{$wilaya->name}}">{{$wilaya->name}}</option>
                                    @endforeach
                                 </select>
                             </div>
                        </div>
                        <div class="form-row">
                           <div class="mb-3 col-md-12">
                                <label>Déscription courte:</label>
                                <textarea  class="form-control" name="short_description"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3 col-md-12">
                                <label>Déscription*:</label>
                                <textarea class="summernote" class="form-control " name="description" >{{old('description')}}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="mb-3 col-md-12">
                                <button type="submit" class="btn btn-primary mt-3">Ajouter le projet</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       </form>
    </div>
</div>
@endsection



