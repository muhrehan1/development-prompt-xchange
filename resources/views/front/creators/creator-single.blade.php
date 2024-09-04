 @extends('front/partials/header')
@section('content')
    <section class="profile_banner">
        <div class="container-fluid">
            <div class="row">
                <div class="profile_cover">
                    <img src="{{asset('front/assets/img/prof_banner.png')}}" alt="">
                </div>
                <div class="profile_cont">
                    <img src="{{asset($profile_picture ?? 'front/assets/img/no-profile.png')}}" alt="Star">
                    <h3 class="text-center">{{$user}}</h3>
                    <ul class="view_list d-flex p-0">
                        <li class="like-btn">
                            <i class="fa-regular fa-heart" ></i>
                            8
                        </li>
                        <li class="view-btn">
                            <i class="fa-thin fa-eye" ></i>
                            2M
                        </li>
                        <li class="comment-btn">
                            <i class="fa-solid fa-message" ></i>
                           14k
                        </li>
                        <li>
                            <i class="fa-solid fa-user-group" ></i>
                            1.2M Followers
                        </li>
                    </ul>

                    <a href="" class="gradient_btn icon_btn">Hire Me <i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery_sec profile_feeds">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" class="active" href="#Trending">Trending </a></li>
                        <li><a data-toggle="pill" href="#Collections">Collections </a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="Trending" class="tab-pane fade in active show">
                            <div class=" ">
                                <div class="feed_row row">
                                    @foreach($promptGenerations as $promptGeneration)
                                        <div class="prof_feed_item">
                                            <div class="image_wrapper">
                                                @if($promptGeneration->generatedImages->isNotEmpty())
                                                    <img src="{{ $promptGeneration->generatedImages->first()->image_url }}" alt="Generated Image">
                                                @else
                                                    <img src="/path/to/default-image.jpg" alt="No Image Available">
                                                @endif
                                                <div class="overlay">
                                                    <strong>{{ $promptGeneration->positive_prompt }}</strong>
                                                </div>
                                            </div>
                                            <div class="prof_feed_cont d-flex">
                                                <strong>{{ $promptGeneration->positive_prompt }}</strong> <a href="{{ route('prompt.generation_single', $promptGeneration->id) }}"><i class="fa-solid fa-plus"></i></a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                            </div>
                        </div>
                        <div id="Collections" class="tab-pane fade in ">
                            <div class=" ">
                                <div class="feed_row row">
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/1.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/2.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/3.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/4.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/5.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/6.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/7.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/8.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/9.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/10.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/11.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/12.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/13.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/14.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/15.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="prof_feed_item">
                                        <img src="{{asset('front/assets/img/feed/16.png')}}" alt="Random Image">
                                        <div class="prof_feed_cont d-flex">
                                            <strong>Sed Ut Perspiciatis
                                                Unde Omnis</strong>
                                            <a href="javascript:;"><i class="fa-solid fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="javascript:;" class="trans_btn">Load More</a>
                </div>
            </div>
        </div>
    </section>
@endsection
