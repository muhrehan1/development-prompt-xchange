@extends('backend/partials/header')
@section('content')
    <section class="dashboard_secs acc_sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div class="d-flex justify-content-between align-items-baseline">
                       <div class="head_title d-flex">
                           <img src="{{asset('backend/assets/img/square.png')}}" alt="">
                           <h3>My Prompts</h3>
                          
                       </div>
                     <div class="btn_div">
                           <a href="{{route('prompt.create')}}" class="gradient_btn d-block">Create a prompt</a>
                       </div>
                   </div>
                </div>

<div class="col-md-12">
    <div class="black_sec row">
        @if($promptGenerations->isEmpty())
            <div class="col-md-12">
                <p class="no-prompt-found">No prompt generations found for the current user.</p>
            </div>
        @else
            @foreach($promptGenerations as $promptGeneration)
                <div class=" mb-4">
                    <h4>Prompt Generation #{{ $promptGeneration->id }}</h4>
                    <p>Model Name: {{ $promptGeneration->model_name }}</p>
                    <p>Positive Prompt: {{ $promptGeneration->positive_prompt }}</p>
                    <p>Negative Prompt: {{ $promptGeneration->negative_prompt }}</p>
                    <p>Samples: {{ $promptGeneration->samples }}</p>
                    <p>Steps: {{ $promptGeneration->steps }}</p>

                    <div class="card-body">
                        <h3>Generated Images</h3>
                        <div class="row">
                            @foreach($promptGeneration->generatedImages as $image)
                                <div class="col-md-3">
                                    <a href="{{ $image->image_url }}" data-fancybox="gallery-{{ $promptGeneration->id }}">
                                        <img style="border-radius:16px;" src="{{ $image->image_url }}" class="img-fluid" alt="Generated Image">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>



            </div>
        </div>
    </section>
    
   
@endsection
