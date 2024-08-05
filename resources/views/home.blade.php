@extends('layouts.app')

@section('title', 'Trang Chủ')

@section('content')
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('admin.news.index') }}">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main class="container mt-4">
    <h1 class="text-center">Chào mừng đến với Trang Chủ của chúng tôi!</h1>
    <p class="text-center">Đây là nơi bạn có thể tìm thấy thông tin mới nhất.</p>

    <div class="row mt-4">
        <div class="col-md-6">
            <h2>Tin tức nổi bật</h2>
            <p>Cập nhật những tin tức mới nhất trong lĩnh vực của bạn.</p>
        </div>
        <div class="col-md-6">
            <h2>Thông tin liên hệ</h2>
            <p>Nếu bạn có câu hỏi hoặc cần thêm thông tin, hãy liên hệ với chúng tôi.</p>
        </div>
    </div>
</main>

<footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1);">
        © 2024 Công ty của bạn. Bảo lưu mọi quyền.
    </div>
</footer>
@endsection
