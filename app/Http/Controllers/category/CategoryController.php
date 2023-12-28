<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use App\Http\Requests\category\StorePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private int $limit;

    public function __construct()
    {
        $this->limit = 5;
    }

    public function index()
    {
        $categories = Category::query()->paginate($this->limit);

        return view('categories.index', compact('categories'));
    }

    public function add()
    {
        return view('categories.add');
    }

    public function edit(int $id)
    {
        $category = Category::find($id);

        return view('categories.edit', compact('category'));
    }

    public function update(int $id, StorePostRequest $request)
    {
        Category::query()->find($id)->update($request->validated());

        return redirect()->route('category.index');
    }

    public function destroy(int $id)
    {
        Category::query()->find($id)->delete();

        return redirect()->route('category.index');
    }

    public function store(StorePostRequest $request)
    {
      $data = $request->validated();
      $category = Category::query()->create($data);

      return redirect()->route('category.index');
    }
}
