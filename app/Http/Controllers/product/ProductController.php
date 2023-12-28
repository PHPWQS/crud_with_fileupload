<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use App\Http\Requests\product\StorePostRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    private string $path;
    private int $limit;

    public function __construct()
    {
        $this->path = 'images';
        $this->limit = 5;    
    }

    private function makeInteger(array $categories): array
    {
        $data = [];
        
        foreach ($categories as $value) {
          $data[] = (int) $value;
        }

        return $data;
    }

    public function index()
    {
        $products = Product::query()->paginate($this->limit);

        return view('products.index', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();

        return view('products.add', compact('categories'));
    }
    
    public function store(StorePostRequest $request)
    {
        $data = $request->except(['_token', 'categories']);
        $categories = $this->makeInteger($request->input('categories'));

        $name = now() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
        $data['thumbnail'] = $name;

        $product = Product::query()->create($data);
        $product->categories()->attach($categories);

        $request->file('thumbnail')->storeAs($this->path, $name, 'public');

        return redirect()->route('product.index');
    }

    public function destroy(int $id)
    {
        $product = Product::query()->find($id);
        
        Storage::delete('public/images/' . $product->value('thumbnail'));
        $product->delete();

        return redirect()->route('product.index');
    }
}
