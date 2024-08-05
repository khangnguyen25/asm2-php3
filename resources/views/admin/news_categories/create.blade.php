@extends('layouts.admin')

@section('title', 'Thêm loại tin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Thêm loại tin mới</h1>

    <form action="{{ route('admin.news-categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Tên loại tin</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Lưu</button>
        <a href="{{ route('admin.news-categories.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    </form>
</div>
@endsection
