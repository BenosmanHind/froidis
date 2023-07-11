@extends('layouts.dashboard-admin')

@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, bienvenue!</h4>
                    <span>Modifier Produit</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Modifier produit</a></li>
                </ol>
            </div>
        </div>

        <form action="{{url('admin/products/'.$product->id)}}" method="POST" id="addProduct" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            @csrf
        <div class="row ">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Modifier produit</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Désignation*:</label>
                                <input type="text"  class="form-control input-default" value="{{$product->designation}}" name="designation" id="designation" placeholder="designation" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Désignation 2:</label>
                                <input type="text"  class="form-control input-default" value="{{$product->seconde_designation}}" name="seconde_designation" id="seconde_designation" placeholder="designation" >

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Prix:</label>
                                <input type="text" class="form-control input-default control-number " value="{{old('price')}}" name="price" placeholder="0.00">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Marque :</label>
                                <input type="text"  class="form-control input-default" value="{{$product->marque}}" name="marque" id="marque" placeholder="marque" >
                            </div>
                            <div class="form-group col-md-6">
                                <label>Catégories :</label>
                                    <select class="form-control selectpicker" data-live-search="true" name="category" >
                                        <option value="0">Séléctionner une catégorie</option>
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->designation}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-9 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Description Courte: </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                             <div class="row">
                                    <div class="mb-3 col-md-12">
                                    <textarea  class="form-control" name="short_description">{{ $product->short_description }}</textarea>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Photo principale</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <div class="input-group mb-3">
                                <input type="file" class="file" id="photoPrincipale" name="photoPrincipale" accept="image/*" >
                            </div>
                        </div>
                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Description Longue: </h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                             <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <textarea class="summernote" class="form-control " name="long_description" >{{$product->long_description}}</textarea>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Photos</h4>
                    </div>
                    <div class="card-body">
                            <div class="basic-form custom_file_input">
                                    <div class="input-group mb-3">
                                            <input type="file" class="file" name="photos[]" accept="image/*" multiple >
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body " id="document" >
                       <div class="basic-form d-flex justify-content-center" >
                            <div class="col-md-10">
                                <table id="tblattribute" class="table table-bordered mt-3 ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Document</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dynamicAddRemove"  >
                                        <tr>
                                            <td >
                                                <input type="file" class="form-control document"  name="documents[]">
                                            </td>
                                            <td>
                                                <button type="button" id="add-document" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-plus"></i></button>
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

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-primary mt-3">Enregistrer</button>
                    </form>
                </div>
               </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection

@push('add-document-scripts')
<script type="text/javascript">
    var i = 0;
    $("#add-document").click(function () {

        $html = '<tr class="tradded">'+
                    '<td >'+
                        '<input type="file" class="form-control"  name="documents[]">'+
                    '<td>'+
                       ' <button type="button" class="btn btn-danger shadow btn-xs sharp delete-document"><i class="fa fa-trash"></i></button>'+
                    '</td>'+
                '</tr>'

        $("#dynamicAddRemove").append($html);
        $(document).on('click', '.delete-document', function () {
        $(this).parents('tr').remove();
        });


    });
</script>
@endpush


