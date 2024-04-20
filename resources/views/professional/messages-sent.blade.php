@extends('layouts.dashboard-professional')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Bonjour, Bienvenue!</h4>
                    <span>Messagerie</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ asset('/professional') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Messagerie</a></li>
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
@endsection
