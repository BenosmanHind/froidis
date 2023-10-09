@extends('layouts.dashboard-admin')
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span>Email</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Read</a></li>
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
                                <a href="{{ asset('/professional/inbox') }}" class="list-group-item active"><i
                                        class="fa fa-inbox font-18 align-middle mr-2"></i> Messages reçus <span
                                        class="badge badge-primary badge-sm float-right">11</span> </a>
                                <a href="{{ asset('/professional/contact-froidis') }}" class="list-group-item"><i class="fa fa-paper-plane font-18 align-middle mr-2"></i>Messages envoyés</a>
                            </div>
                        </div>
                        <div class="email-right-box ml-0 ml-sm-4 ml-sm-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="right-box-padding">
                                        <div class="read-content">
                                            <div class="media pt-3">
                                                <img class="mr-2 rounded" width="50" alt="image" src="./images/avatar/1.jpg">
                                                <div class="media-body">
                                                    <h5 class="text-primary mb-0 mt-1">{{ $message->sender->name }}</h5>
                                                    <p class="mb-0">{{ $message->created_at->format('d M y') }}</p>
                                                </div>
                                                <a href="javascript:void()" class="btn btn-primary px-3 light"><i class="fa fa-reply"></i> </a>
                                                <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-long-arrow-right"></i> </a>
                                                <a href="javascript:void()" class="btn btn-primary px-3 light ml-2"><i class="fa fa-trash"></i></a>
                                            </div>
                                            <hr>
                                            <div class="media mb-2 mt-3">
                                                <div class="media-body"><span class="pull-right">{{ $message->created_at->format('H:m') }}</span>
                                                    <h5 class="my-1 text-primary">{{ $message->subject }}</h5>
                                                    <p class="read-content-email">
                                                        À moi</p>
                                                </div>
                                            </div>
                                            <div class="read-content-body">

                                                <p class="mb-2">{{ $message->message }}</p>
                                                <hr>
                                            </div>
                                            <div class="read-content-attachment">
                                                <h6><i class="fa fa-download mb-2"></i> Pièces jointes
                                                    <span>({{ $message->files->count() }})</span></h6>
                                                <div class="row attachment">
                                                    @foreach($message->files as $file)
                                                    <div class="col-auto">
                                                        <a href="javascript:void()" class="text-muted">{{ $file->file }}</a>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="form-group pt-3">
                                                <textarea name="write-email" id="write-email" cols="30" rows="5" class="form-control" placeholder="...."></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <button class="btn btn-primary " type="button">Envoer</button>
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
