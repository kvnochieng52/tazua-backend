@extends('layouts.app')

@section('title', 'Manage Blogs - Admin - Tazua')

@section('content')
    <div style="padding-top: 100px; background: #f8f9fa; min-height: 100vh;">
        <div class="container">

            <!-- Page Header -->
            <div class="row">
                <div class="col-12">
                    <div class="admin-page-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Manage Blogs</h1>
                                <p class="text-muted">Create, edit and manage blog posts</p>
                            </div>
                            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus"></i> Create New Blog
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert">
                                <span>&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Blogs Table -->
            <div class="row">
                <div class="col-12">
                    <div class="admin-table-card">
                        @if ($blogs->count() > 0)
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Published</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($blogs as $blog)
                                            <tr>
                                                <td>
                                                    <div class="blog-title-cell">
                                                        <strong>{{ Str::limit($blog->title, 50) }}</strong>
                                                        @if ($blog->thumbnail)
                                                            <br><small class="text-muted"><i class="fas fa-image"></i> Has
                                                                thumbnail</small>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge badge-secondary">{{ ucfirst($blog->category) }}</span>
                                                </td>
                                                <td>
                                                    @if ($blog->is_published)
                                                        <span class="badge badge-success">Published</span>
                                                    @else
                                                        <span class="badge badge-warning">Draft</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{ $blog->formatted_published_date ?: 'Not published' }}
                                                </td>
                                                <td>
                                                    {{ $blog->created_at->format('M d, Y') }}
                                                </td>
                                                <td>
                                                    <div class="action-buttons">
                                                        <a href="{{ route('blogs.show', $blog->slug) }}"
                                                            class="btn btn-sm btn-outline-primary" target="_blank"
                                                            title="View">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('admin.blogs.edit', $blog) }}"
                                                            class="btn btn-sm btn-outline-secondary" title="Edit">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        <form method="POST"
                                                            action="{{ route('admin.blogs.destroy', $blog) }}"
                                                            class="d-inline"
                                                            onsubmit="return confirm('Are you sure you want to delete this blog post?')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Pagination -->
                            <div class="table-pagination">
                                {{ $blogs->links() }}
                            </div>
                        @else
                            <div class="empty-state">
                                <div class="text-center py-5">
                                    <i class="fas fa-blog fa-3x text-muted mb-3"></i>
                                    <h4>No blog posts yet</h4>
                                    <p class="text-muted">Get started by creating your first blog post!</p>
                                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                                        <i class="fas fa-plus"></i> Create Your First Blog
                                    </a>
                                </div>
                            </div>
                        @endif
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

        .admin-table-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .table {
            margin: 0;
        }

        .table thead th {
            background: #667eea;
            color: white;
            border: none;
            font-weight: 600;
            padding: 20px 15px;
        }

        .table tbody td {
            padding: 20px 15px;
            vertical-align: middle;
            border-top: 1px solid #eee;
        }

        .blog-title-cell strong {
            color: #333;
        }

        .action-buttons {
            white-space: nowrap;
        }

        .action-buttons .btn {
            margin-right: 5px;
            min-width: 35px;
        }

        .table-pagination {
            padding: 20px;
            background: #f8f9fa;
            border-top: 1px solid #eee;
        }

        .empty-state {
            padding: 60px 20px;
        }

        .badge {
            font-size: 12px;
            padding: 5px 10px;
        }

        .btn-primary {
            background: #667eea;
            border-color: #667eea;
        }

        .btn-primary:hover {
            background: #5a67d8;
            border-color: #5a67d8;
        }

        @media (max-width: 768px) {
            .admin-page-header .d-flex {
                flex-direction: column;
                text-align: center;
            }

            .admin-page-header .btn {
                margin-top: 20px;
            }

            .action-buttons {
                display: flex;
                flex-direction: column;
            }

            .action-buttons .btn {
                margin-bottom: 5px;
            }
        }
    </style>
@endpush
