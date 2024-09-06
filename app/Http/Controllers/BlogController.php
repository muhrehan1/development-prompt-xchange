<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Carbon\Carbon;
use App\Models\Pricing;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data = ["title" =>"Blogs | Prompt Xchange"];
        return view('backend.blogs.list', $data);
    }

    public function get_blogs()
    {
        $blogs = Blog::with('category')->get();;
        return response()->json($blogs);
    }


    public function create_blogs()
    {
        $data = ["title" =>" Blog Create | Prompt Xchange"];
        return view('backend.blogs.create', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'blog_title' => 'required',
            'blog_image' => 'required|image',
            'blog_desc' => 'required',
            'category' => 'required'
        ]);

        if ($request->hasFile('blog_image')) {
            $image = $request->file('blog_image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blogs');
            $image->move($destinationPath, $name);
        }

        Blog::create([
            'title' => $request->blog_title,
            'slug' =>Str::slug($request->blog_title),
            'image' => '/uploads/blogs/' . $name,
            'content' => $request->blog_desc,
            'publish_date' => Carbon::now()->toDateString(), // Use the current date
            'reading_time' => $request->reading_time ?? '4',
            'category_id' =>$request->category
        ]);

        return response()->json(['success' => 'Blog added successfully.']);
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return response()->json($blog);
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'publish_date' => 'required|date',
            'reading_time' => 'required',
            'category' => 'required'
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blogs', 'public');
            $blog->image = $imagePath;
        }

        $blog->update([
            'title' => $request->title,
            'slug' =>Str::slug($request->blog_title),
            'content' => $request->blog_content,
            'publish_date' => $request->publish_date,
            'reading_time' => $request->reading_time,
            'category_id' =>$request->category
        ]);

        return response()->json(['success' => 'Blog updated successfully.']);
    }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();

        return response()->json(['success' => 'Blog deleted successfully.']);
    }
}
