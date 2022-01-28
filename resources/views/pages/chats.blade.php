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
                                       <a href="{{ route('start_chat', ['receiver_id'=>$user->id]) }}" >
                                        <div class="p-3 d-flex align-items-center border-bottom osahan-post-header overflow-hidden">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle"
                                                    src="{{ asset('asset/images/user/s1.png') }}" alt=""></div>
                                            <div class="font-weight-bold mr-1 overflow-hidden">
                                                <div class="text-truncate">{{ $user->name}}</div>
                                                <div class="small text-truncate overflow-hidden text-black-50"><i
                                                        class="mdi mdi-check text-primary"></i> Pellentesque semper ex diam,
                                                    at tristique ipsum varius sed. Pellentesque non metus ullamcorper</div>
                                            </div>
                                            <span class="ml-auto mb-auto">
                                                <div class="text-right text-muted pt-1 small">00:21PM</div>
                                            </span>
                                        </div>
                                       </a>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-xl-8 px-0">
                                <div class="p-3 d-flex align-items-center  border-bottom osahan-post-header">
                                    <div class="font-weight-bold mr-1 overflow-hidden">
                                        <div class="text-truncate">{{$receiver->name}}
                                        </div>
                                        <div class="small text-truncate overflow-hidden text-black-50">Askbootstap.com -
                                            Become a Product Manager with super power</div>
                                    </div>
                                    <span class="ml-auto">
                                        <button type="button" class="btn btn-light btn-sm rounded">
                                            <i class="mdi mdi-phone"></i>
                                        </button>
                                        <button type="button" class="btn btn-light btn-sm rounded">
                                            <i class="mdi mdi-video"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-light btn-sm rounded"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button"><i class="mdi mdi-trash"></i>
                                                    Delete</button>
                                                <button class="dropdown-item" type="button"><i
                                                        class="mdi mdi-x-circle"></i> Turn Off</button>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                                <div class="osahan-chat-box p-3 border-top border-bottom bg-light">
                                    {{-- <div class="text-center my-3">
                                        <span class="px-3 py-2 small bg-white shadow-sm  rounded">DEC 21, 2020</span>
                                    </div>
                                    <div class="d-flex align-items-center osahan-post-header">
                                        <div class="dropdown-list-image mr-3 mb-auto"><img class="rounded-circle"
                                                src="{{ asset('asset/images/user/s1.png') }}" alt=""></div>
                                        <div class="mr-1">
                                            <div class="text-truncate h6 mb-3">Carl Jenkins
                                            </div>
                                            <p>Hi Marie</p>
                                            <p>welcome to Live Chat! My name is Jason. How can I help you today?
                                                <a href="#">iamosahan@gmail.com</a>
                                            </p>
                                        </div>
                                        <span class="ml-auto mb-auto">
                                            <div class="text-right text-muted pt-1 small">00:21PM</div>
                                        </span>
                                    </div> --}}
                                    {{-- <div class="text-center my-3">
                                        <span class="px-3 py-2 small bg-white shadow-sm rounded">DEC 22, 2020</span>
                                    </div>
                                    <div class="d-flex align-items-center osahan-post-header">
                                        <div class="dropdown-list-image mr-3 mb-auto"><img class="rounded-circle"
                                                src="{{ asset('asset/images/user/s2.png') }}" alt=""></div>
                                        <div class="mr-1">
                                            <div class="text-truncate h6 mb-3">Jack P. Angulo
                                            </div>
                                            <p>Hi, I wanted to check my order status. My order number is 0009483021 😀</p>
                                        </div>
                                        <span class="ml-auto mb-auto">
                                            <div class="text-right text-muted pt-1 small">00:21PM</div>
                                        </span>
                                    </div> --}}
                                    {{-- <div class="text-center my-3">
                                        <span class="px-3 py-2 small bg-white shadow-sm rounded">DEC 23, 2020</span>
                                    </div>
                                    <div class="d-flex align-items-center osahan-post-header">
                                        <div class="dropdown-list-image mr-3 mb-auto"><img class="rounded-circle"
                                                src="{{ asset('asset/images/user/s1.png') }}" alt=""></div>
                                        <div class="mr-1">
                                            <div class="text-truncate h6 mb-3">Carl Jenkins
                                            </div>
                                            <p>Is there anything else that I can do for you?</p>
                                            <p>wI understand your concern… I wouldn’t want my child’s gift to arrive late
                                                either. It looks like your order is set to arrive in 2 business days, so it
                                                should arrive by Friday, just in time!</p>
                                        </div>
                                        <span class="ml-auto mb-auto">
                                            <div class="text-right text-muted pt-1 small">00:21PM</div>
                                        </span>
                                    </div> --}}
                                   @forelse($chats as $chat)
                                    <div class="text-center my-3">
                                        <span class="px-3 py-2 small bg-white shadow-sm rounded">{{ \Carbon\Carbon::parse($chat->created_at)->isoFormat('MMM Do YYYY') }}</span>
                                    </div>
                                    <div class="d-flex align-items-center osahan-post-header">
                                        <div class="dropdown-list-image mr-3 mb-auto"><img class="rounded-circle"
                                                src="{{ asset('asset/images/user/s2.png') }}" alt=""></div>
                                        <div class="mr-1">


                                            <div class="text-truncate h6 mb-3">
                                                @if($chat->message_thread->receiver == $receiver->id)
                                                    {{$receiver->name}}
                                                @endif


                                            </div>
                                            <p>{{$chat->message}}
                                            </p>
                                        </div>
                                        <span class="ml-auto mb-auto">
                                            <div class="text-right text-muted pt-1 small">{{ \Carbon\Carbon::parse($chat->from_date)->format('h:i A') }}</div>
                                        </span>
                                    </div>
                                    @empty
                                    Pas de message !
                                    @endforelse
                                </div>

                                <form action="{{ route('send_sms') }}" method="post">
                                    @csrf
                                   <input type="hidden" value="{{$receiver->id}}" name="receiver_id">
                                    <div class="w-100 border-top border-bottom">
                                        <textarea name="message" placeholder="Write a message…"
                                            class="form-control border-0 p-3 shadow-none" rows="2"></textarea>
                                    </div>

                                    <div class="p-3 d-flex align-items-center">
                                        <div class="overflow-hidden">
                                            <input type="file" name="file" id="">
                                            {{-- <button type="file" class="btn btn-light btn-sm rounded">
                                                <i class="mdi mdi-image"></i>
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm rounded">
                                                <i class="mdi mdi-paperclip"></i>
                                            </button>
                                            <button type="button" class="btn btn-light btn-sm rounded">
                                                <i class="mdi mdi-camera"></i>
                                            </button> --}}
                                        </div>
                                        <span class="ml-auto">
                                            <button type="submit" class="btn btn-success btn-sm rounded">
                                                <i class="mdi mdi-send"></i> Send
                                            </button>
                                        </span>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </main>
                @include('partials.aside')
            </div>
        </div>
    </div>
@endsection
