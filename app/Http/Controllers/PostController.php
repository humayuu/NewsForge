<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['category', 'user'])
            ->latest()
            ->paginate(5);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts', 'public');
        }

        $isPublish = $request->is_published;
        if ($isPublish == 1) {
            $timeStamp = now();
            $status = 'published';
        }

        Post::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image_path' => $imagePath,
            'is_published' => $request->is_published,
            'published_at' => $timeStamp ?? null,
            'status' => $status ?? 'draft',

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $oldImagePath = $post->image_path;
        $newImage = null;
        if ($request->hasFile('image')) {
            $newImage = $request->file('image')->store('posts', 'public');
            Storage::disk('public')->delete($oldImagePath);
        }

        $image = ($newImage) ? $newImage : $oldImagePath;


        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content,
            'image_path' => $image,

        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $imagePath = $post->image_path;
        // if (file_exists($imagePath)) {
        Storage::disk('public')->delete($imagePath);
        // }

        $post->delete($post);
        return redirect()->back();
    }

    /**
     * For Publish Post
     */
    public function postPublish($id)
    {
        // $newStatus = $post->status == 'archived' || $post->status == 'draft' ?? 'published';
        $post = Post::findOrFail($id);
        $post->update(['status' => 'published']);

        return redirect()->back();
    }

    /**
     * For Archived Post
     */
    public function postArchived($id)
    {
        // $newStatus = $post->status == 'published' || $post->status == 'draft' ?? 'archived';

        $post = Post::findOrFail($id);
        $post->update(['status' => 'archived']);

        return redirect()->back();
    }
}