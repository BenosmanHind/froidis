@extends('layouts.dashboard-professional')
@section('content')
<style>
    .message-box {
    background-color: #f2f2f2; /* Couleur de fond gris */
     /* Bordure grise */
    padding: 20px; /* Espacement intérieur */
    text-align: center; /* Centrer le contenu */
    margin: 0 auto; /* Centrer horizontalement */
    max-width: 1000px; /* Largeur maximale du cadre */
}
</style>
</style>
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
                        <a href="{{ asset('/professional/contact-froidis/create') }}" class="list-group-item "><i
                            class="mdi mdi-file-document-box font-18 align-middle mr-2"></i> Contacter froidis</a>
                        <a href="{{ asset('/professional/inbox') }}" class="list-group-item "><i
                                class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                class="badge badge-primary badge-sm float-right">1</span> </a>
                        <a href="{{ asset('/professional/contact-froidis') }}" class="list-group-item active"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
                    </div>
                </div>
                <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                    <div class="email-list mt-3">
                        @if($messages->count() === 0)
                        <div class="message-box mt-4">
                        <h6>Vous n'avez envoyé aucun message jusqu'à présent.</h6>
                        </div>
                        @endif
                        @foreach($messages as $message)
                        <div class="message">
                            <div>
                                <div class="d-flex message-single">
                                    <div class="pl-1 align-self-center">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox11">
                                            <label class="custom-control-label" for="checkbox11"></label>
                                        </div>
                                    </div>
                                    <div class="ml-2">
                                        <button class="border-0 bg-transparent align-middle p-0"><i
                                                class="fa fa-star" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                                <a href="{{ asset('/professional/messages-read/'.$message->id) }}" class="col-mail col-mail-2">
                                    <div class="subject">{{ $message->message }}</div>
                                    <div class="date">{{ $message->created_at->format('H:m') }}</div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- panel -->

                </div>
            </div>
        </div>
    </div>
</div>

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
