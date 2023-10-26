@extends('layouts.dashboard-admin')
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
                        <a href="{{ asset('/admin/inbox') }}" class="list-group-item active"><i
                                class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                class="badge badge-primary badge-sm float-right">11</span> </a>
                        <a href="{{ asset('/admin/messages-send') }}" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
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
                                    <a href="{{ asset('/admin/messages-read/'.$message->id) }}" class="col-mail col-mail-2">
                                        <div class="subject">{{ $message->message }}</div>
                                        <div class="date">{{ $message->created_at->format('d M') }}</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                     </div>
                    <!-- panel -->
                    <div class="row mt-4">
                        <div class="col-12 pl-3">
                            <nav>
                                <ul class="pagination pagination-gutter pagination-primary pagination-sm no-bg">
                                    <li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void()">1</a></li>
                                    <li class="page-item "><a class="page-link" href="javascript:void()">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void()">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
                                    <li class="page-item page-indicator"><a class="page-link" href="javascript:void()"><i class="la la-angle-right"></i></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
@endsection
