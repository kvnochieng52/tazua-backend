@extends('layouts.app')

@section('title', 'Create Blog - Admin - Tazua')

@section('content')
    <div style="padding-top: 100px; background: #f8f9fa; min-height: 100vh;">
        <div class="container">

            <!-- Page Header -->
            <div class="row">
                <div class="col-12">
                    <div class="admin-page-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Create New Blog Post</h1>
                                <p class="text-muted">Write and publish a new blog post</p>
                            </div>
                            <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-secondary">
                                <i class="fas fa-arrow-left"></i> Back to Blogs
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Form -->
            <div class="row">
                <div class="col-12">
                    <div class="admin-form-card">

                        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-8">
                                    <!-- Title -->
                                    <div class="form-group">
                                        <label for="title">Title *</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"
                                            id="title" name="title" value="{{ old('title') }}" required>
                                        @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Excerpt -->
                                    <div class="form-group">
                                        <label for="excerpt">Excerpt</label>
                                        <textarea class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name="excerpt" rows="3"
                                            placeholder="A brief description of your blog post...">{{ old('excerpt') }}</textarea>
                                        <small class="form-text text-muted">Optional. Will be used in blog listings and meta
                                            description if provided.</small>
                                        @error('excerpt')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Content -->
                                    <div class="form-group">
                                        <label for="content">Content *</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="15"
                                            required placeholder="Write your blog post content here...">{{ old('content') }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <!-- Publish Settings -->
                                    <div class="admin-form-section">
                                        <h5>Publish Settings</h5>

                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" class="custom-control-input" id="is_published"
                                                    name="is_published" value="1"
                                                    {{ old('is_published') ? 'checked' : '' }}>
                                                <label class="custom-control-label" for="is_published">
                                                    Publish immediately
                                                </label>
                                            </div>
                                            <small class="form-text text-muted">Uncheck to save as draft</small>
                                        </div>
                                    </div>

                                    <!-- Category -->
                                    <div class="admin-form-section">
                                        <h5>Category</h5>
                                        <div class="form-group">
                                            <label for="category">Category *</label>
                                            <input type="text"
                                                class="form-control @error('category') is-invalid @enderror" id="category"
                                                name="category" value="{{ old('category') }}" required
                                                placeholder="e.g., Technology, Lifestyle, Business">
                                            @error('category')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Featured Image -->
                                    <div class="admin-form-section">
                                        <h5>Featured Image</h5>
                                        <div class="form-group">
                                            <label for="thumbnail">Thumbnail</label>
                                            <input type="file"
                                                class="form-control-file @error('thumbnail') is-invalid @enderror"
                                                id="thumbnail" name="thumbnail" accept="image/*">
                                            <small class="form-text text-muted">Upload a featured image for your blog post
                                                (optional)</small>
                                            @error('thumbnail')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- SEO Settings -->
                                    <div class="admin-form-section">
                                        <h5>SEO Settings</h5>

                                        <div class="form-group">
                                            <label for="meta_title">Meta Title</label>
                                            <input type="text"
                                                class="form-control @error('meta_title') is-invalid @enderror"
                                                id="meta_title" name="meta_title" value="{{ old('meta_title') }}"
                                                placeholder="Leave empty to use blog title">
                                            @error('meta_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"
                                                name="meta_description" rows="3" placeholder="Leave empty to use excerpt">{{ old('meta_description') }}</textarea>
                                            @error('meta_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="form-submit">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fas fa-save"></i> Create Blog Post
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@push('styles')
    <style>
        .admin-page-header {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .admin-page-header h1 {
            margin: 0;
            color: #333;
            font-weight: 700;
        }

        .admin-form-card {
            background: white;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .admin-form-section {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        .admin-form-section h5 {
            margin-bottom: 20px;
            color: #333;
            font-weight: 600;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 12px 15px;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        .btn-primary {
            background: #667eea;
            border-color: #667eea;
            padding: 12px 25px;
            font-weight: 600;
        }

        .btn-primary:hover {
            background: #5a67d8;
            border-color: #5a67d8;
        }

        .custom-control-label {
            font-weight: 500;
        }

        .form-submit {
            position: sticky;
            top: 20px;
        }

        @media (max-width: 768px) {
            .admin-page-header .d-flex {
                flex-direction: column;
                text-align: center;
            }

            .admin-page-header .btn {
                margin-top: 20px;
            }

            .admin-form-card {
                padding: 20px;
            }

            .form-submit {
                position: static;
                margin-top: 30px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Auto-resize textareas
            const textareas = document.querySelectorAll('textarea');
            textareas.forEach(function(textarea) {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    this.style.height = (this.scrollHeight) + 'px';
                });
            });
        });
    </script>
@endpush
