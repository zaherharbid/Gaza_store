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
            'title' => 'required|max:100|unique:blogs,title',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:100',

        ]);

        $path = $request->file('image')->store('uploads', 'public');

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $path,
            'description' => $request->description
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
            'title' => 'required|max:100|unique:blogs,title,' . $blog->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif',
            'description' => 'required|max:100',

        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($blog->image);
            $path = $request->file('image')->store('uploads', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'image' => $path ?? $blog->image,
            'description' => $request->description
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
}
