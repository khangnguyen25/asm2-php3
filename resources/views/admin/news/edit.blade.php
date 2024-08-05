@extends('layouts.admin')

@section('title', 'Sửa tin tức')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Sửa tin tức</h1>

    <form action="{{ route('admin.news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $news->title }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Danh mục</label>
            <select name="category_id" id="category_id" class="form-control" required>
                <option value="">Chọn danh mục</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $news->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="content">Nội dung</label>
            <textarea name="content" id="content" class="form-control" rows="5" required>{{ $news->content }}</textarea>
        </div>
        <button type="submit" class="btn btn-success mt-3">Cập nhật</button>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    </form>
</div>
@endsection
