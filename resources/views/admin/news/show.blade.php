@extends('layouts.admin')

@section('title', 'Chi tiết tin tức')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">{{ $news->title }}</h1>
    <p><strong>Danh mục:</strong> {{ $news->category->name }}</p>
    <p><strong>Nội dung:</strong></p>
    <p>{{ $news->content }}</p>
    <a href="{{ route('admin.news.index') }}" class="btn btn-secondary mt-3">Quay lại</a>
</div>
@endsection
