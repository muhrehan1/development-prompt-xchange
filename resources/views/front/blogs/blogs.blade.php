@extends('front/partials/header')
@section('content')
<section class="blog_banner">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-12" style="background:url('front/assets/img//blogs/banner.png');">
                <div class="banner_cont">
                    <a href="javascript:;">Consectetur Ex Co</a>
                    <h2>Tempor Consectetur Est Elit</h2>
                    <div class="date">Dec 24, 2023 <div class="dura">5 mins read</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blogs_grid_sec">
    <div class="container-fluid">
        <div class="row">
        @foreach($blogs as $key => $blog)

            <div class="col-md-4">
                <div class="blog_box">
                    <div class="blog_info">
                    <img src="{{ asset($blog->image) }}">
                        <div class="blog_cont_box">
                        <div class="tag"><a href="#">{{ $blog->category->name ?? 'No Category' }}</a></div>
                        <a href="{{route('prompt.blogs_details' ,$blog->slug)}}"><h3>{{$blog->title}}</h3></a>
                        <div class="date_info d-flex justify-content-between">
                            <span class="date">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</span>
                            <span>5 Mins Read</span>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                <a href="javascript:;" class="trans_btn">See more articles</a>
            </div>
        </div>
    </div>
</section>
<section class="blog_btm">
    <div class="container-fluid">
        <div class="row" style="background:url('front/assets/img//blogs/btm.png');">
            <div class="col_cont">
                <h4 class="">Want To Know More?</h4>
                <p class="">Do consectetur proident proident id eiusmod
                    deserunt consequat pariatur ad ex velit do Lorem
                    reprehenderit.</p>
                    <a href="javascript:;" class="icon_btn gradient_btn">Contact us <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col_img">
                <img src="{{asset('front/assets/img/blogs/bl.png')}}">
            </div>
        </div>
    </div>
</section>
@endsection
