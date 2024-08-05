@extends('layouts.admin')

@section('title', 'Quản lý loại tin')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Danh sách loại tin</h1>

    <a href="{{ route('admin.news-categories.create') }}" class="btn btn-primary mb-3">Thêm loại tin mới</a>

    <table class="table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>Tên loại tin</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('admin.news-categories.edit', $category) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.news-categories.destroy', $category) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
