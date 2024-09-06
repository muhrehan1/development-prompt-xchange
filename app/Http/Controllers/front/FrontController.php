<?php

namespace App\Http\Controllers\front;
use App\Models\GeneratedImage;
use App\Models\Likes;
use App\Models\Blog;
use App\Models\PromptGeneration;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function home()
    {
        $data = ['title' =>"Home | Prompt Xchange"];
        return view('front.home' ,$data);
    }
    public function about(){
         $data = ['title' =>"About us | Prompt Xchange"];
        return view('front.about.aboutus' ,$data);
    }
    public function contactus(){
         $data = ['title' =>"Contact us | Prompt Xchange"];
        return view('front.contact.contact' ,$data);
    }
    public function pricing(){
         $data = ['title' =>"Pricing | Prompt Xchange"];
        return view('front.pricing' ,$data);
    }
     public function discover(){
          $data = ['title' =>"Discover | Prompt Xchange"];
        return view('front.discover',$data);
    }
    public function hire(){

        $creators = User::whereHas('roles', function($query) {
            $query->where('slug', 'content_creator');
        })->get();
        $data = ['title' =>"Hire | Prompt Xchange"];
        return view('front.creators.creators',$data ,compact('creators'));
    }
    public function generation_single($id){

        $data = ['title' =>"Generation Single | Prompt Xchange"];
        $promptGeneration = PromptGeneration::with('generatedImages')
        ->findOrFail($id);
        $get_user = User::where('id' ,$promptGeneration->user_id)
            ->get();
        $user_data = [
           'user_name' => $get_user[0]->name,
           'user_slug' =>$get_user[0]->user_slug,
           'email' =>$get_user[0]->email,
           'country'=> $get_user[0]->country,
           'city' =>$get_user[0]->city,
           'state' =>$get_user[0]->state,
           'user_profile_picture' => $get_user[0]->user_picture
       ];
        return view('front.creators.generation-single',$data ,compact('promptGeneration' ,'user_data'));
    }

    public function creator_single($slug){

        $profile = User::where('user_slug', $slug)->firstOrFail();

        if (auth()->check()) {
            $current_user_id = Auth::user()->id;
        }else{
            $current_user_id = '';
        }
        $get_liked_details = Likes::where('user_id' , $current_user_id)
            ->where('post_id' , $profile->id)
            ->where('item_type','profile')
            ->first();

        $get_profile_likes = Likes::where('post_id' , $profile->id)
            ->where('item_type','profile')
            ->where('liked','heart')
            ->get();
        $all_count = $get_profile_likes->count();

        $promptGenerations = PromptGeneration::where('user_id', $profile->id)
            ->with('generatedImages')
            ->get();
        $name =  $profile->name;
        $profile_picture = $profile->user_picture;
        $data = [
        'title' => "Creator | " . $profile->name,
        'user' => $name,
        'profile_picture' => $profile_picture,

        ];
        return view('front.creators.creator-single', $data,compact('promptGenerations' ,'profile', 'get_liked_details', 'all_count'));
    }
     public function blogs(){
          $data = ['title' =>"Blogs | Prompt Xchange"];
          $blogs =  Blog::with('category')->get();
        return view('front.blogs.blogs',$data,compact('blogs'));
    }
    public function blogs_details($slug){
         $data = ['title' =>" $slug | Prompt Xchange"];
        $blog_single = Blog::with('category')->where('slug', $slug)->firstOrFail();
        $latest_blogs = Blog::where('slug', '!=', $slug)
            ->orderBy('publish_date', 'desc')
            ->take(3) // Adjust the number of blogs you want to display
            ->get();
        return view('front.blogs.blog-details',$data ,compact('blog_single' ,'latest_blogs'));
    }
      public function create(){
        $data = ['title' =>"Create | Prompt Xchange"];
        return view('front.createprompt.create',$data);
    }
}
