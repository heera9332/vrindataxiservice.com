@extends('admin.layouts.master')

@section('title', 'Posts & Dynamic SEO Pages')

@section('page_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Posts & Dynamic SEO Pages</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Create New Post
        </a>
    </div>
</div>
@endsection

@section('content')
@if(session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<!-- Filters Card -->
<div class="card card-outline card-secondary mb-3">
    <div class="card-body p-3">
        <form method="GET" action="{{ route('posts.index') }}" class="row g-2 align-items-center">
            <div class="col-md-4">
                <input type="text" name="search" class="form-control form-control-sm" placeholder="Search by title, slug, or excerpt..." value="{{ request('search') }}">
            </div>
            <div class="col-md-3">
                <select name="category_id" class="form-control form-control-sm">
                    <option value="">-- All Categories --</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category_id') == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3">
                <select name="status" class="form-control form-control-sm">
                    <option value="">-- All Statuses --</option>
                    <option value="published" {{ request('status') === 'published' ? 'selected' : '' }}>Published</option>
                    <option value="draft" {{ request('status') === 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="archived" {{ request('status') === 'archived' ? 'selected' : '' }}>Archived</option>
                </select>
            </div>
            <div class="col-md-2">
                <button type="submit" class="btn btn-sm btn-primary btn-block">
                    <i class="fas fa-filter"></i> Filter
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Posts Table Card -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">All Posts ({{ $posts->total() }})</h3>
    </div>
    <div class="card-body table-responsive p-0">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 60px;">Image</th>
                    <th>Title / URL Slug</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Published At</th>
                    <th class="text-right" style="width: 170px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($posts as $post)
                <tr>
                    <td>
                        @if($post->featured_image)
                            <img src="{{ $post->featured_image_url }}" alt="" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            <div class="bg-light text-muted d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; border-radius: 4px;">
                                <i class="fas fa-image"></i>
                            </div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $post->title }}</strong>
                        <br>
                        <small class="text-muted">
                            <i class="fas fa-link"></i> <a href="{{ url($post->slug) }}" target="_blank">/{{ $post->slug }}</a>
                        </small>
                    </td>
                    <td>
                        @if($post->category)
                            <span class="badge badge-light border">{{ $post->category->name }}</span>
                        @else
                            <span class="text-muted">—</span>
                        @endif
                    </td>
                    <td>
                        @if($post->status === 'published')
                            <span class="badge badge-success">Published</span>
                        @elseif($post->status === 'draft')
                            <span class="badge badge-warning">Draft</span>
                        @else
                            <span class="badge badge-secondary">Archived</span>
                        @endif
                    </td>
                    <td>
                        <small>
                            {{ $post->published_at ? $post->published_at->format('d M Y, h:i A') : 'Not Set' }}
                            @if($post->published_at && $post->published_at->isFuture())
                                <br><span class="badge badge-info">Scheduled</span>
                            @endif
                        </small>
                    </td>
                    <td class="text-right">
                        <a href="{{ url($post->slug) }}" target="_blank" class="btn btn-xs btn-default" title="View Public Page">
                            <i class="fas fa-external-link-alt"></i>
                        </a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-xs btn-info" title="Edit Post">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this post?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-xs btn-danger" title="Delete Post">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-muted">
                        No posts found matching the criteria. Click "Create New Post" to publish one.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    @if($posts->hasPages())
    <div class="card-footer clearfix">
        {{ $posts->links() }}
    </div>
    @endif
</div>
@endsection
