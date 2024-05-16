@extends('layouts.dashboard-professional')
@section('content')
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
        @include('flash-message')
        <div class="row">
           <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body  p-4">
                        <a class="lien-protege" href="{{ asset('/professional/demande-devis/create') }}">
                            <div class="media ai-icon mt-2">
                                <span class="mr-3">
                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                </span> <br>
                                <div class="media-body ">
                                    <p class="mb-1">Demander un devis</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <a class="lien-protege" href="#">
                            <div class="media ai-icon mt-2">
                                <span class="mr-3">
                                    <svg id="icon-orders" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                        <polyline points="14 2 14 8 20 8"></polyline>
                                        <line x1="16" y1="13" x2="8" y2="13"></line>
                                        <line x1="16" y1="17" x2="8" y2="17"></line>
                                        <polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Documents téléchargeable</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                            <a href="{{asset('/professional/contact-froidis/create')}}">
                            <div class="media ai-icon mt-2">
                                <span class="mr-3">
                                    <!-- <i class="ti-user"></i> -->
                                    <svg id="icon-customers" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-email">
                                        <path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                        <polyline points="4 8 12 14 20 8"></polyline>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Messagerie</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <a  href="{{asset('/professional/my-informations')}}">
                            <div class="media ai-icon mt-2">
                                <span class="mr-3">
                                    <!-- <i class="ti-user"></i> -->
                                    <svg id="icon-customers3" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </span>
                                <div class="media-body">
                                    <p class="mb-1">Mes informations</p>
                                </div>
                            </div>
                        </a>
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
