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
                    <li class="breadcrumb-item"><a href="{{ asset('/professional') }}">Dashbaord</a></li>
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
                                <a href="{{ asset('/admin/inbox') }}" class="list-group-item "><i
                                        class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                        class="badge badge-primary badge-sm float-right">11</span> </a>
                                <a href="{{ asset('/admin/messages-sent') }}" class="list-group-item active"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
                            </div>
                        </div>
                        <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        <div class="read-content">
                                            <div class="media pt-3">
                                                <img class="mr-2 rounded" width="50" alt="image" src="{{ asset('dashboard/images/avatar/1.jpg') }}">
                                                <div class="media-body">
                                                    <h5 class="text-primary mb-0 mt-1">Froidis</h5>
                                                    <p class="mb-0">{{ $message->created_at->format('D, H:m') }}</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="media mb-2 mt-3">
                                                <div class="media-body"><span class="pull-right">{{ $message->created_at->format('H:m') }}</span>
                                                   <p class="read-content-email">
                                                        À: {{ ucfirst($message->recipient->name) }}</p>
                                                </div>
                                            </div>
                                            <div class="read-content-body">
                                                <p class="mb-2">
                                                    {{ $message->message }}
                                                </p>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
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
