<?php

// app/Http/Controllers/Admin/NewsCategoryController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    public function index()
    {
        $categories = NewsCategory::all();
        return view('admin.news_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.news_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required']);
        NewsCategory::create($request->all());
        return redirect()->route('admin.news-categories.index');
    }
    public function show($id)
    {
        $category = NewsCategory::findOrFail($id);
        return view('admin.news_categories.show', compact('category'));
    }


    public function edit($id)
    {
        $category = NewsCategory::findOrFail($id);
        return view('admin.news_categories.edit', compact('category'));
    }


    public function update(Request $request, $id)
    {
        $request->validate(['name' => 'required']);
        $category = NewsCategory::findOrFail($id);
        $category->update($request->all());
        return redirect()->route('admin.news-categories.index');
    }
        public function destroy($id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->delete();
        return redirect()->route('admin.news-categories.index');
    }

}

