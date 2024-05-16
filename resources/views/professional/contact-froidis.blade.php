@extends('layouts.dashboard-professional')
@section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    @if(Auth::user()->status == 0)
                    <div class="alert alert-warning" role="alert">
                     <span style="font-size: 15px;"> Vous voulez activer votre compte, <a href="{{url('/professional/my-informations')}}" class="alert-link">cliquez-ici ! </a></span>
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
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-3">
                                    <div class="mail-list mt-4">
                                        <a href="{{ asset('/professional/contact-froidis/create') }}" class="list-group-item active"><i
                                            class="mdi mdi-file-document-box font-18 align-middle mr-2"></i> Contacter froidis</a>
                                        <a href="{{ asset('/professional/inbox') }}" class="list-group-item "><i
                                                class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                                class="badge badge-primary badge-sm float-right">1</span> </a>
                                        <a href="{{ asset('/professional/contact-froidis') }}" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
                                    </div>


                                </div>
                                <form action="{{ asset('/professional/contact-froidis') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                                    <div class="compose-content">
                                            <div class="form-group">
                                                <input type="text" class="form-control bg-transparent" placeholder=" Sujet:" name="subject" required>
                                            </div>
                                            <div class="form-group">
                                                <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Entrer le message ..." name="message" required></textarea>
                                            </div>

                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Pièce jointe</h5>
										<form action="#" class="dropzone">
											<div class="fallback">
												<input name="files[]" type="file" multiple />
											</div>
										</form>
                                    </div>
                                    <div class="text-left mt-4 mb-5">
                                        <button class="btn btn-primary btn-sl-sm mr-2" type="submit"><span class="mr-2"><i class="fa fa-paper-plane"></i></span>Envoyer</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
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
