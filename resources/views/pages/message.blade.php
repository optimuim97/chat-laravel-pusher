@extends('layouts.app')

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <main class="col col-xl-9 order-xl-2 col-lg-12 order-lg-1 col-md-12 col-sm-12 col-12">
                    <div class="box shadow-sm rounded bg-white mb-3 osahan-chat">
                        <h5 class="pl-3 pt-3 pr-3 border-bottom mb-0 pb-3">Messaging</h5>
                        <div class="row m-0">
                            <div class="border-right col-lg-5 col-xl-4 px-0">
                                <div class="osahan-chat-left">
                                    <div class="position-relative icon-form-control p-3 border-bottom">
                                        <i class="fa fa-search position-absolute"></i>
                                        <input placeholder="Search messages" type="text"  class="form-control">
                                    </div>
                                    <div class="osahan-chat-list">
                                       @foreach ($users as $user)
                                            @include('conversations.users',['users'=>$users, 'unread'=> $unread])
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                @include('partials.aside')
            </div>
        </div>
    </div>
@endsection
