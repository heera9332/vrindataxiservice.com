@extends('admin.layouts.master')

@section('title', 'Edit Category')

@section('page_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Category: {{ $category->name }}</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Categories
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Edit Category Details</h3>
    </div>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="form-group">
                <label for="name">Category Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name) }}" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug (URL Identifier)</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $category->slug) }}">
                <small class="form-text text-muted">Used for dynamic navigation filtering (e.g. <code>our-location</code>, <code>book-taxi</code>, <code>services</code>).</small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3">{{ old('description', $category->description) }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ old('status', $category->status) === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $category->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info">
                <i class="fas fa-save"></i> Update Category
            </button>
            <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>
@endsection
