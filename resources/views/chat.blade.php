@extends('layouts.app')

@section('content')   
                
    <div class="container">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Chat</h1>
                    </div>
                    
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!--mail-read-contant-start-->
        <div class="row">
            <div class="col-12">
                <div class="card card-statistics">
                    <div class="card-body p-0">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-xxl-3">
                                <div class="app-chat-sidebar border-right border-md-n h-100">

                                    <search-chat></search-chat>

                                    <contact-chat :asset="'{{ asset('/') }}'"></contact-chat>
                                    
                                </div>
                            </div>
                            <div class="col-xl-8 col-xxl-9 border-md-t">

                                <message-chat></message-chat>

                                <form-chat></form-chat>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--mail-read-contant-end-->
    </div>                   
   
@endsection
