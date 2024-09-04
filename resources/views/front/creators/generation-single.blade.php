@extends('front/partials/header')
@section('content')
    <section class="comment_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex">
                        <div class="btn_row mb-5 pb-5">
                            <a href="javascript:;" class="gradient_btn mr-2">Landscape</a>
                            <a href="javascript:;" class="trans_btn">Country</a>
                        </div>
                    </div>
                    <div class="blog_profile_cont d-fex">
                        <div class="pic d-fex">
                            <div class="prof_det d-flex">
                                <div class="d-flex">
                                    <img src="{{$user_data['user_profile_picture']}}">
                                    <strong>{{$user_data['user_name']}}</strong>
                                </div>
                                <span>Lorem ipsum</span>
                            </div>
                            <div class="desc">Lorem ipsum</div>
                            <a href="" class="follow_btn">Follow</a>
                        </div>
                    </div>
                    <div class="comment_view_row d-flex justify-content-between">
                        <div class="view d-flex">
                            <span><i class="fa-regular fa-eye"></i>1.8M</span>
                            <span><i class="fa-regular fa-message"></i>4K</span>
                        </div>
                        <div class="share d-flex">
                            <a href="javascript:;"><i class="fa-solid fa-share-nodes"></i></a>
                            <a href="javascript:;"><i class="fa-solid fa-tag"></i></a>
                            <a href="javascript:;"><i class="fa-solid fa-ellipsis-vertical"></i></a>
                        </div>

                    </div>
                    <div class="comment_img_prof">
                        <div class="image-slider">
                            @foreach($promptGeneration->generatedImages as $image)
                                <div class="slider-item">
                                    <img src="{{ asset($image->image_url) }}" alt="Generated Image" class="slider-img">
                                </div>
                            @endforeach
                        </div>
                        <p>
                            <b>Prompt:</b> {{$promptGeneration->positive_prompt}}
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="comment_row">
                    <div class="total_comment">
                        <strong>Comment <span>(28)</span></strong>
                        <a class="cross_btn"><i class="fa-solid fa-xmark"></i></a>
                    </div>
                    <div class="create_comment">
                        <div class="comment_box d-flex">
                            <img src="{{asset('front/assets/img/14.png')}}">
                            <div class="form-group">
                                <textarea id="comment" name="comment" class="form-control" rows="5" placeholder="Write your comment here..."></textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="attached_file d-flex">
                                <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                <a href="javascript:;"><i class="fa-regular fa-image"></i></a>
                                <a href="javascript:;"><i class="fa-solid fa-paperclip"></i></a>
                            </div>
                            <div class="btn_row">
                                <a href="javascript:;" class="trans_btn">Cancel</a>
                                <a href="javascript:;" class="gradient_btn ml-2">Post</a>

                            </div>
                        </div>
                    </div>
                    <div class="relevent_cont">
                        <strong>Most Relevant<a class="open_comment"><i class="fa-solid fa-chevron-down"></i></a></strong>
                        <div class="comment_div">
                            <div class="current_commen">
                                <div class="comment_prof">
                                    <img src="{{asset('front/assets/img/15.png')}}">
                                    <span>Anna</span>
                                    <div class="time">12:03 PM</div>
                                </div>
                                <div class="comment">Ut in ad laborum minim aliqua mollit proident enim adipisicing. Pariatur nisi velit eiusmod magna mollit adipisicing ut mollit qui ad sunt mollit ipsum nisi dolore.Quis eu commodo aliquip amet est fugiat duis id ad officia voluptate.
                                    Duis esse.</div>
                                <div class="like_btns_row">
                                    <a class="linke_btn"><i class="fa-solid fa-thumbs-up"></i></a>
                                    <a href="javascript:;" class="reply_btn trans_btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_div">
                            <div class="current_commen">
                                <div class="comment_prof">
                                    <img src="{{asset('front/assets/img/15.png')}}">
                                    <span>Anna</span>
                                    <div class="time">12:03 PM</div>
                                </div>
                                <div class="comment">Ut in ad laborum minim aliqua mollit proident enim adipisicing. Pariatur nisi velit eiusmod magna mollit adipisicing ut mollit qui ad sunt mollit ipsum nisi dolore.Quis eu commodo aliquip amet est fugiat duis id ad officia voluptate.
                                    Duis esse.</div>
                                <div class="like_btns_row">
                                    <a class="linke_btn"><i class="fa-solid fa-thumbs-up"></i></a>
                                    <a href="javascript:;" class="reply_btn trans_btn">Reply</a>
                                </div>
                            </div>
                            <div class="reply_comment">
                                <div class="comment_prof">
                                    <img src="{{asset('front/assets/img/15.png')}}">
                                    <span>Anna</span>
                                    <div class="time">12:03 PM</div>
                                </div>
                                <div class="comment">Ut in ad laborum minim aliqua mollit proident enim adipisicing. Pariatur nisi velit eiusmod magna mollit adipisicing ut mollit qui ad sunt mollit ipsum nisi dolore.Quis eu commodo aliquip amet est fugiat duis id ad officia voluptate.
                                    Duis esse.</div>
                                <div class="like_btns_row">
                                    <a class="linke_btn"><i class="fa-solid fa-thumbs-up"></i></a>
                                    <a href="javascript:;" class="reply_btn trans_btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <div class="comment_div">
                            <div class="current_commen">
                                <div class="comment_prof">
                                    <img src="{{asset('front/assets/img/15.png')}}">
                                    <span>Anna</span>
                                    <div class="time">12:03 PM</div>
                                </div>
                                <div class="comment">Ut in ad laborum minim aliqua mollit proident enim adipisicing. Pariatur nisi velit eiusmod magna mollit adipisicing ut mollit qui ad sunt mollit ipsum nisi dolore.Quis eu commodo aliquip amet est fugiat duis id ad officia voluptate.
                                    Duis esse.</div>
                                <div class="like_btns_row">
                                    <a class="linke_btn"><i class="fa-solid fa-thumbs-up"></i></a>
                                    <a href="javascript:;" class="reply_btn trans_btn">Reply</a>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:;" class="trans_btn d-block text-center">Show more discussion (25)</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recommend_sec">
        <div class="container-fluid">
            <div class="col-12">
                <h3>Recommend To You</h3>
                <div class="recomended_blogs">
                    @for ($i=1;$i<6;$i++)
                        <div class="blog_box_recom">
                            <img src="{{asset('front/assets/img/blogs/'.$i.'.png')}}" class="recom_blog_img">
                            <div class="recom_cont">
                                <div class="recom_details">
                                    <h6>Sed Ut Perspiciatis Unde Omnis</h6>
                                    <div class="rec_prof d-flex">
                                        <img src="{{asset('front/assets/img/15.png')}}" class="">
                                        <span>John doe</span>
                                    </div>
                                </div>
                                <a class="view_more" href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
