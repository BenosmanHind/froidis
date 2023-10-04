@extends('layouts.dashboard-professional')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Bonjour, Bienvenue!</h4>
                            <span>Contact</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ asset('/professional') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Contact</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-3">
                                    <div class="mail-list mt-4">
                                        <a href="{{ asset('/professional/contact-froidis') }}" class="list-group-item active"><i
                                            class="mdi mdi-file-document-box font-18 align-middle mr-2"></i> Contacter froidis</a>
                                        <a href="{{ asset('/professional/inbox') }}" class="list-group-item "><i
                                                class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                                class="badge badge-primary badge-sm float-right">20</span> </a>
                                        <a href="javascript:void()" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
                                    </div>


                                </div>
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div class="compose-content">
                                        <form action="#">
                                           <div class="form-group">
                                                <input type="text" class="form-control bg-transparent" placeholder=" Sujet:">
                                            </div>
                                            <div class="form-group">
                                                <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Entrer le message ..."></textarea>
                                            </div>
                                        </form>
                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Pièce jointe</h5>
										<form action="#" class="dropzone">
											<div class="fallback">
												<input name="file" type="file" multiple />
											</div>
										</form>
                                    </div>
                                    <div class="text-left mt-4 mb-5">
                                        <button class="btn btn-primary btn-sl-sm mr-2" type="button"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Envoyer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection
