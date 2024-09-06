@extends('backend/partials/header')
@section('content')
    <section class="dashboard_secs chat_sec">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 search_row">
                    <div class=" d-flex justify-content-between">
                        <div class="back">
                            <a href="javascript:;" class="back_btn"><i class="fa-solid fa-arrow-left"></i></a><span>Inbox</span>
                        </div>
                        <div class="search_div">
                            <input type="text" placeholder="Search">
                            <button><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="chat_name">
                        <div class="search_name">
                            <input type="text" placeholder="Search">
                            <button><i class="fa-solid fa-magnifying-glass fa-fw"></i></button>
                        </div>
                        <div class="friend_name">
                            <ul>
                                @for($i=1;$i<10;$i++) <li class="d-flex align-items-center">
                                    <img src="{{asset('front/assets/img/'.$i.'.png')}}" alt="">
                                    <div class="cont">
                                        <p>John Doe</p>
                                        <span>abcdxyz@gmail.com</span>
                                    </div>
                                    <div class="time">
                                        <span>3hrs</span>
                                        <p>2</p>
                                    </div>
                                </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="chat_conversation">
                        <div class="chat_head d-flex">
                            <div class="chat_prof">
                                <div class="img_prof">
                                    <img src="{{asset('front/assets/img/1.png')}}" alt="">
                                    <p class="name">John Doe</p>
                                </div>
                                <div class="active_friend">Active</div>
                            </div>
                            <div class="chat_det">
                                <span class="text-right">Email<br>abcdxyz@gmail.com</span>
                            </div>
                        </div>
                        <ul class="chats">
                            @for($i=0;$i<10;$i++) <li class="sent chat">
                                <div class="chat_info d-flex">
                                    <img src="{{asset('front/assets/img/1.png')}}" alt="">
                                    <p class="name">John Doe</p>
                                    <div class="chat_time">2 mins</div>
                                </div>
                                <div class="conver">
                                    Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry.
                                </div>
                            </li>
                            <li class="recieve chat">
                                <div class="chat_info d-flex">
                                    <img src="{{asset('front/assets/img/1.png')}}" alt="">
                                    <p class="name">John Doe</p>
                                    <div class="chat_time">2 mins</div>
                                </div>
                                <div class="conver">
                                    Lorem Ipsum is simply dummy text of the printing
                                    and typesetting industry.
                                </div>
                            </li>
                            @endfor
                        </ul>
                        <div class="message_type">
                            <input type="text" placeholder="Type a message">
                            <div class="send_mxg d-flex justify-content-between">
                                <div class="file">
                                    <input type="file">
                                    <i class="fa-solid fa-paperclip"></i>
                                </div>
                                <button class="gradient_btn">send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
