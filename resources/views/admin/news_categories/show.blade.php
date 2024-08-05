@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Chi tiết loại tin</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tên loại tin: {{ $category->name }}</h5>
            <a href="{{ route('admin.news-categories.edit', $category->id) }}" class="btn btn-warning">Sửa</a>
            <form action="{{ route('admin.news-categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Xóa</button>
            </form>
            <a href="{{ route('admin.news-categories.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>
@endsection
