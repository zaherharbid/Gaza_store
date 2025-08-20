<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('dashboard.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('dashboard.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_en' => 'required|max:100|unique:blogs,title->en',
            'title_ar' => 'required|max:100|unique:blogs,title->ar',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'description_en' => 'required',
            'description_ar' => 'required',

        ]);

        $path = $request->file('image')->store('uploads', 'public');

        Blog::create([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'slug' => Str::slug($request->title_en),
            'image' => $path,
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ]
        ]);

        return redirect()
            ->route('dashboard.blogs.index')
            ->with('msg', 'Blog Added successfully')
            ->with('alert-type', 'success');
    }

    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title_en' => 'required|max:100|unique:blogs,title->en' . $blog->id,
            'title_ar' => 'required|max:100|unique:blogs,title->ar' . $blog->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'description_en' => 'required',
            'description_ar' => 'required',

        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($blog->image);
            $path = $request->file('image')->store('uploads', 'public');
        }

        $blog->update([
            'title' => [
                'en' => $request->title_en,
                'ar' => $request->title_ar,
            ],
            'image' => $path ?? $blog->image,
            'description' => [
                'en' => $request->description_en,
                'ar' => $request->description_ar,
            ]
        ]);

        return redirect()
            ->route('dashboard.blogs.index')
            ->with('msg', 'Blog Updated successfully')
            ->with('type', 'info');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()
            ->route('dashboard.blogs.index')
            ->with('msg', 'Blog Deleted Successfully')
            ->with('type', 'danger');
    }
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogs = Blog::latest()->take(5)->get();
        return view('front.blog-show', compact('blog', 'blogs'));
    }
}
