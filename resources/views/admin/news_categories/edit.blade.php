@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Sửa loại tin</h1>

    <form action="{{ route('admin.news-categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Tên loại tin</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Cập nhật</button>
        <a href="{{ route('admin.news-categories.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
    </form>
</div>
@endsection
