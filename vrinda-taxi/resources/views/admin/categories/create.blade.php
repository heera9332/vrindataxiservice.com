@extends('admin.layouts.master')

@section('title', 'Add New Category')

@section('page_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Add New Category</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Categories
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Category Details</h3>
    </div>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
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
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="e.g. Our Location, Book Taxi, Services" required>
            </div>

            <div class="form-group">
                <label for="slug">Slug (URL Identifier)</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug') }}" placeholder="Auto-generated if left empty (e.g. our-location)">
                <small class="form-text text-muted">Used for dynamic navigation filtering (e.g. <code>our-location</code>, <code>book-taxi</code>, <code>services</code>).</small>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" rows="3" placeholder="Optional category description">{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control">
                    <option value="active" {{ old('status', 'active') === 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status') === 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> Save Category
            </button>
            <a href="{{ route('categories.index') }}" class="btn btn-default">Cancel</a>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script>
    const nameInput = document.getElementById('name');
    const slugInput = document.getElementById('slug');
    let userEditedSlug = false;

    slugInput.addEventListener('input', () => {
        userEditedSlug = slugInput.value.trim().length > 0;
    });

    nameInput.addEventListener('input', () => {
        if (!userEditedSlug) {
            slugInput.value = nameInput.value
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
        }
    });
</script>
@endsection
