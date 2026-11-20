<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of posts with search and filters.
     */
    public function index(Request $request)
    {
        $query = Post::with('category');

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%")
                  ->orWhere('excerpt', 'like', "%{$search}%");
            });
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $posts = $query->latest()->paginate(15)->withQueryString();
        $categories = Category::orderBy('name')->get();

        return view('admin.posts.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new post.
     */
    public function create()
    {
        $categories = Category::where('status', 'active')->orderBy('name')->get();
        return view('admin.posts.create', compact('categories'));
    }

    /**
     * Store a newly created post.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'slug' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'status' => 'required|in:published,draft,archived',
            'content' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $slug = Post::generateUniqueSlug($request->slug ?: $request->title);

        $imagePath = null;
        if ($request->hasFile('featured_image')) {
            $imagePath = $this->handleImageUpload($request->file('featured_image'));
        }

        Post::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'status' => $request->status,
            'content' => $request->content,
            'featured_image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'published_at' => $request->published_at ?: ($request->status === 'published' ? now() : null),
        ]);

        return redirect()->route('posts.index')->with('success', 'Post created successfully!');
    }

    /**
     * Show the form for editing the specified post.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::where('status', 'active')->orderBy('name')->get();

        return view('admin.posts.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified post.
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'slug' => 'nullable|string|max:255',
            'excerpt' => 'nullable|string',
            'status' => 'required|in:published,draft,archived',
            'content' => 'nullable|string',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,webp,gif|max:5120',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'published_at' => 'nullable|date',
        ]);

        $slug = Post::generateUniqueSlug($request->slug ?: $request->title, $post->id);

        $imagePath = $post->featured_image;
        if ($request->hasFile('featured_image')) {
            // Delete existing image if present
            $this->deleteImageFile($post->featured_image);
            $imagePath = $this->handleImageUpload($request->file('featured_image'));
        }

        $post->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'slug' => $slug,
            'excerpt' => $request->excerpt,
            'status' => $request->status,
            'content' => $request->content,
            'featured_image' => $imagePath,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'published_at' => $request->published_at ?: $post->published_at,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post updated successfully!');
    }

    /**
     * Remove the specified post.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $this->deleteImageFile($post->featured_image);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully!');
    }

    /**
     * Public single post route: /post/{slug}
     */
    public function showPublic($slug)
    {
        $post = Post::where('slug', $slug)
            ->published()
            ->firstOrFail();

        return view('front-end.post', compact('post'));
    }

    /**
     * Two-Tier Dynamic Catch-All Slug Router: /{slug}
     */
    public function showSlug($slug)
    {
        // Redirect legacy .php URLs with 301
        if (str_ends_with($slug, '.php')) {
            $cleanSlug = substr($slug, 0, -4);
            if ($cleanSlug === 'about') {
                return redirect()->route('about', [], 301);
            }
            if ($cleanSlug === 'contact') {
                return redirect()->route('contact', [], 301);
            }
            if ($cleanSlug === 'package') {
                return redirect()->route('package', [], 301);
            }
            return redirect('/' . $cleanSlug, 301);
        }

        // Tier 1: Look for published post in database
        $post = Post::where('slug', $slug)
            ->published()
            ->first();

        if ($post) {
            return view('front-end.post', compact('post'));
        }

        // Tier 2: Check if physical blade template exists for static pages
        if (view()->exists('front-end.' . $slug)) {
            return view('front-end.' . $slug);
        }

        // Tier 3: Destination & Route landing pages fallback
        return view('front-end.taxi-service', compact('slug'));
    }

    /**
     * Handle featured image upload
     */
    private function handleImageUpload($file): string
    {
        $destinationDir = public_path('uploads/posts');
        if (!File::exists($destinationDir)) {
            File::makeDirectory($destinationDir, 0755, true);
        }

        $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move($destinationDir, $filename);

        // Also sync to root uploads/posts if running on shared hosting setup
        $rootUploads = dirname(base_path()) . '/uploads/posts';
        if (File::isDirectory(dirname(base_path()) . '/uploads')) {
            if (!File::isDirectory($rootUploads)) {
                @File::makeDirectory($rootUploads, 0755, true);
            }
            @File::copy($destinationDir . '/' . $filename, $rootUploads . '/' . $filename);
        }

        return $filename;
    }

    /**
     * Delete image file from disk
     */
    private function deleteImageFile(?string $filename): void
    {
        if (!$filename || str_starts_with($filename, 'http')) {
            return;
        }

        $localPath = public_path('uploads/posts/' . basename($filename));
        if (File::exists($localPath)) {
            File::delete($localPath);
        }

        $rootPath = dirname(base_path()) . '/uploads/posts/' . basename($filename);
        if (File::exists($rootPath)) {
            File::delete($rootPath);
        }
    }
}
