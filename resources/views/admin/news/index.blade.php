@extends('layouts.admin')

@section('title', 'Quản lý tin tức')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Danh sách tin tức</h1>

    <a href="{{ route('admin.news.create') }}" class="btn btn-primary mb-3">Thêm tin tức mới</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Tiêu đề</th>
                <th>Danh mục</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->category->name }}</td>
                    <td>
                        <a href="{{ route('admin.news.edit', $item) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.news.destroy', $item) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
