<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Hiển thị danh sách tin tức
    public function index()
    {
        $news = News::with('category')->get();
        return view('admin.news.index', compact('news'));
    }

    // Hiển thị form tạo tin tức mới
    public function create()
    {
        $categories = NewsCategory::all();
        return view('admin.news.create', compact('categories'));
    }

    // Lưu tin tức mới vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        News::create($request->all());
        return redirect()->route('admin.news.index')->with('success', 'Tin tức đã được tạo thành công!');
    }

    // Hiển thị chi tiết một tin tức
    public function show($id)
    {
        $news = News::with('category')->findOrFail($id);
        return view('admin.news.show', compact('news'));
    }

    // Hiển thị form chỉnh sửa tin tức
    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = NewsCategory::all();
        return view('admin.news.edit', compact('news', 'categories'));
    }

    // Cập nhật tin tức trong cơ sở dữ liệu
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        $news = News::findOrFail($id);
        $news->update($request->all());
        return redirect()->route('admin.news.index')->with('success', 'Tin tức đã được cập nhật thành công!');
    }

    // Xóa một tin tức
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect()->route('admin.news.index')->with('success', 'Tin tức đã được xóa thành công!');
    }
}
