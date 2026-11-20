@extends('admin.layouts.master')

@section('title', 'Edit Post')

@section('styles')
<style>
    /* Tiptap Editor Styling */
    .tiptap-toolbar {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-bottom: none;
        border-radius: 4px 4px 0 0;
        padding: 8px;
        display: flex;
        flex-wrap: wrap;
        gap: 4px;
    }
    .tiptap-toolbar button {
        background: #fff;
        border: 1px solid #ced4da;
        border-radius: 3px;
        padding: 4px 8px;
        font-size: 13px;
        cursor: pointer;
        color: #495057;
        transition: all 0.15s ease-in-out;
    }
    .tiptap-toolbar button:hover {
        background: #e9ecef;
        color: #212529;
    }
    .tiptap-toolbar button.is-active {
        background: #007bff;
        color: #fff;
        border-color: #007bff;
    }
    .tiptap-editor-box {
        border: 1px solid #ced4da;
        border-radius: 0 0 4px 4px;
        min-height: 350px;
        max-height: 600px;
        overflow-y: auto;
        padding: 16px;
        background: #fff;
        font-family: inherit;
        font-size: 15px;
        line-height: 1.6;
    }
    .tiptap-editor-box:focus {
        outline: none;
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    .tiptap-editor-box h1 { font-size: 1.85rem; font-weight: 700; margin-top: 1rem; margin-bottom: 0.5rem; }
    .tiptap-editor-box h2 { font-size: 1.5rem; font-weight: 600; margin-top: 1rem; margin-bottom: 0.5rem; }
    .tiptap-editor-box h3 { font-size: 1.25rem; font-weight: 600; margin-top: 0.75rem; margin-bottom: 0.5rem; }
    .tiptap-editor-box blockquote { border-left: 4px solid #007bff; padding-left: 1rem; margin: 1rem 0; color: #6c757d; font-style: italic; }
    .tiptap-editor-box img { max-width: 100%; height: auto; border-radius: 4px; margin: 0.5rem 0; }
    .tiptap-editor-box p.is-editor-empty:first-child::before {
        color: #adb5bd;
        content: attr(data-placeholder);
        float: left;
        height: 0;
        pointer-events: none;
    }
</style>
@endsection

@section('page_header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Edit Post</h1>
    </div>
    <div class="col-sm-6 text-right">
        <a href="{{ url($post->slug) }}" target="_blank" class="btn btn-outline-info mr-2">
            <i class="fas fa-external-link-alt"></i> View Public Page
        </a>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Back to Posts
        </a>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <!-- Main Content (Left 8 Cols) -->
        <div class="col-lg-8">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h3 class="card-title">Edit Content: {{ $post->title }}</h3>
                </div>
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

                    <!-- Title -->
                    <div class="form-group">
                        <label for="post-title">Title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="post-title" class="form-control form-control-lg" value="{{ old('title', $post->title) }}" required>
                    </div>

                    <!-- Slug -->
                    <div class="form-group">
                        <label for="post-slug">URL Slug <small class="text-muted">(Zero URL prefix: <code>https://vrindataxiservice.com/your-slug</code>)</small></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ url('/') }}/</span>
                            </div>
                            <input type="text" name="slug" id="post-slug" class="form-control" value="{{ old('slug', $post->slug) }}">
                        </div>
                    </div>

                    <!-- Excerpt -->
                    <div class="form-group">
                        <label for="excerpt">Short Excerpt / Summary</label>
                        <textarea name="excerpt" id="excerpt" rows="2" class="form-control">{{ old('excerpt', $post->excerpt) }}</textarea>
                    </div>

                    <!-- Content (Tiptap Rich-Text WYSIWYG) -->
                    <div class="form-group mb-0">
                        <label>Post Body Content</label>
                        
                        <!-- Tiptap Toolbar -->
                        <div class="tiptap-toolbar" id="tiptap-toolbar">
                            <button type="button" data-action="bold" title="Bold"><i class="fas fa-bold"></i></button>
                            <button type="button" data-action="italic" title="Italic"><i class="fas fa-italic"></i></button>
                            <button type="button" data-action="underline" title="Underline"><i class="fas fa-underline"></i></button>
                            <button type="button" data-action="strike" title="Strikethrough"><i class="fas fa-strikethrough"></i></button>
                            <span class="border-right mx-1"></span>
                            <button type="button" data-action="h1" title="Heading 1"><strong>H1</strong></button>
                            <button type="button" data-action="h2" title="Heading 2"><strong>H2</strong></button>
                            <button type="button" data-action="h3" title="Heading 3"><strong>H3</strong></button>
                            <button type="button" data-action="paragraph" title="Paragraph"><i class="fas fa-paragraph"></i></button>
                            <span class="border-right mx-1"></span>
                            <button type="button" data-action="bulletList" title="Bullet List"><i class="fas fa-list-ul"></i></button>
                            <button type="button" data-action="orderedList" title="Numbered List"><i class="fas fa-list-ol"></i></button>
                            <button type="button" data-action="blockquote" title="Blockquote"><i class="fas fa-quote-left"></i></button>
                            <button type="button" data-action="hr" title="Horizontal Line"><i class="fas fa-minus"></i></button>
                            <span class="border-right mx-1"></span>
                            <button type="button" data-action="link" title="Add Link"><i class="fas fa-link"></i></button>
                            <button type="button" data-action="unlink" title="Remove Link"><i class="fas fa-unlink"></i></button>
                            <button type="button" data-action="image" title="Insert Image via URL"><i class="fas fa-image"></i></button>
                            <span class="border-right mx-1"></span>
                            <button type="button" data-action="undo" title="Undo"><i class="fas fa-undo"></i></button>
                            <button type="button" data-action="redo" title="Redo"><i class="fas fa-redo"></i></button>
                        </div>

                        <!-- Tiptap Editor Surface -->
                        <div id="tiptap-editor" class="tiptap-editor-box"></div>

                        <!-- Hidden Form Input that receives HTML -->
                        <textarea name="content" id="post-content" class="d-none">{{ old('content', $post->content) }}</textarea>
                    </div>
                </div>
            </div>

            <!-- SEO Accordion Card -->
            <div class="card card-secondary card-outline">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-search"></i> On-Page SEO & Meta Tags</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="meta_title">Custom Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control" value="{{ old('meta_title', $post->meta_title) }}" placeholder="Leave blank to use Post Title + Brand">
                        <small class="text-muted">Recommended length: 50–60 characters.</small>
                    </div>

                    <div class="form-group mb-0">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" rows="3" class="form-control" placeholder="Search engine snippet description...">{{ old('meta_description', $post->meta_description) }}</textarea>
                        <small class="text-muted">Recommended length: 140–160 characters. Falls back to excerpt if blank.</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar Options (Right 4 Cols) -->
        <div class="col-lg-4">
            <!-- Publishing Box -->
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-paper-plane"></i> Publish Settings</h3>
                </div>
                <div class="card-body">
                    <!-- Status -->
                    <div class="form-group">
                        <label for="status">Publication Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="published" {{ old('status', $post->status) === 'published' ? 'selected' : '' }}>Published (Live on site)</option>
                            <option value="draft" {{ old('status', $post->status) === 'draft' ? 'selected' : '' }}>Draft (Private)</option>
                            <option value="archived" {{ old('status', $post->status) === 'archived' ? 'selected' : '' }}>Archived</option>
                        </select>
                    </div>

                    <!-- Category -->
                    <div class="form-group">
                        <label for="category_id">Navigation Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">-- No Category --</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Posts in <strong>Our Location</strong>, <strong>Book Taxi</strong>, or <strong>Services</strong> appear automatically in the website navbar dropdowns.
                        </small>
                    </div>

                    <!-- Scheduled Release Date -->
                    <div class="form-group mb-0">
                        <label for="published_at">Publish Date / Schedule</label>
                        <input type="datetime-local" name="published_at" id="published_at" class="form-control" value="{{ old('published_at', $post->published_at ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
                        <small class="text-muted">Future dates schedule publication automatically.</small>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info btn-block">
                        <i class="fas fa-save"></i> Update Post
                    </button>
                </div>
            </div>

            <!-- Featured Image Box -->
            <div class="card card-outline card-secondary">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-image"></i> Featured Image</h3>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img id="image-preview" src="{{ $post->featured_image_url ?: asset('vrinda-taxi/assets/img/logo/logo.png') }}" alt="" class="img-fluid rounded border p-1" style="max-height: 180px; object-fit: cover;">
                    </div>
                    <div class="custom-file">
                        <input type="file" name="featured_image" id="featured_image" class="custom-file-input" accept="image/*">
                        <label class="custom-file-label text-left" for="featured_image">Change image</label>
                    </div>
                    <small class="form-text text-muted mt-2">Recommended size: 1200x630px (Max: 5MB)</small>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('scripts')
<!-- Tiptap WYSIWYG via Browser ESM Modules -->
<script type="module">
    import { Editor } from 'https://esm.sh/@tiptap/core';
    import StarterKit from 'https://esm.sh/@tiptap/starter-kit';
    import Underline from 'https://esm.sh/@tiptap/extension-underline';
    import Link from 'https://esm.sh/@tiptap/extension-link';
    import Image from 'https://esm.sh/@tiptap/extension-image';
    import Placeholder from 'https://esm.sh/@tiptap/extension-placeholder';

    const editorElement = document.querySelector('#tiptap-editor');
    const hiddenInput = document.getElementById('post-content');
    const toolbar = document.getElementById('tiptap-toolbar');

    const editor = new Editor({
        element: editorElement,
        extensions: [
            StarterKit.configure({
                heading: { levels: [1, 2, 3] }
            }),
            Underline,
            Link.configure({
                openOnClick: false,
                autolink: true,
                defaultProtocol: 'https',
                HTMLAttributes: { target: '_blank', rel: 'noopener noreferrer' }
            }),
            Image.configure({ inline: true, allowBase64: true }),
            Placeholder.configure({ placeholder: 'Write rich, engaging content here for readers and search engines...' })
        ],
        content: hiddenInput.value || '',
        onUpdate({ editor }) {
            hiddenInput.value = editor.getHTML();
            updateToolbarActiveStates();
        },
        onSelectionUpdate() {
            updateToolbarActiveStates();
        }
    });

    function updateToolbarActiveStates() {
        toolbar.querySelectorAll('button[data-action]').forEach(btn => {
            const action = btn.getAttribute('data-action');
            let isActive = false;
            if (['bold', 'italic', 'underline', 'strike', 'blockquote'].includes(action)) {
                isActive = editor.isActive(action);
            } else if (['h1', 'h2', 'h3'].includes(action)) {
                isActive = editor.isActive('heading', { level: parseInt(action.substring(1)) });
            } else if (['bulletList', 'orderedList'].includes(action)) {
                isActive = editor.isActive(action);
            } else if (action === 'link') {
                isActive = editor.isActive('link');
            }
            btn.classList.toggle('is-active', isActive);
        });
    }

    toolbar.addEventListener('click', (e) => {
        const btn = e.target.closest('button[data-action]');
        if (!btn) return;
        const action = btn.getAttribute('data-action');

        switch(action) {
            case 'bold': editor.chain().focus().toggleBold().run(); break;
            case 'italic': editor.chain().focus().toggleItalic().run(); break;
            case 'underline': editor.chain().focus().toggleUnderline().run(); break;
            case 'strike': editor.chain().focus().toggleStrike().run(); break;
            case 'h1': editor.chain().focus().toggleHeading({ level: 1 }).run(); break;
            case 'h2': editor.chain().focus().toggleHeading({ level: 2 }).run(); break;
            case 'h3': editor.chain().focus().toggleHeading({ level: 3 }).run(); break;
            case 'paragraph': editor.chain().focus().setParagraph().run(); break;
            case 'bulletList': editor.chain().focus().toggleBulletList().run(); break;
            case 'orderedList': editor.chain().focus().toggleOrderedList().run(); break;
            case 'blockquote': editor.chain().focus().toggleBlockquote().run(); break;
            case 'hr': editor.chain().focus().setHorizontalRule().run(); break;
            case 'undo': editor.chain().focus().undo().run(); break;
            case 'redo': editor.chain().focus().redo().run(); break;
            case 'link':
                const previousUrl = editor.getAttributes('link').href;
                const url = window.prompt('Enter hyperlink URL:', previousUrl || 'https://');
                if (url === null) return;
                if (url === '') { editor.chain().focus().extendMarkRange('link').unsetLink().run(); return; }
                editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run();
                break;
            case 'unlink':
                editor.chain().focus().unsetLink().run();
                break;
            case 'image':
                const imgUrl = window.prompt('Enter image URL:');
                if (imgUrl) { editor.chain().focus().setImage({ src: imgUrl }).run(); }
                break;
        }
    });
</script>

<script>
    // Image Upload Preview
    const imageInput = document.getElementById('featured_image');
    const imagePreview = document.getElementById('image-preview');
    imageInput.addEventListener('change', function() {
        if (this.files && this.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
            }
            reader.readAsDataURL(this.files[0]);
            this.nextElementSibling.innerText = this.files[0].name;
        }
    });
</script>
@endsection
