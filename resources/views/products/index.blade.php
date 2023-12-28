@extends('layouts.basic')

@section('content')
  
  <div class="w-full py-3 mt-5 bg-gray-300 rounded-lg">
    <div class="card_header flex items-center justify-between px-5">
      <span class="font-bold text-lg">Products</span>
      <a href="{{ route('product.add') }}">
        <button class="px-4 py-2 bg-slate-900 text-white rounded-md">Add Product</button>
      </a>
    </div>
    <div class="cards mt-3">
      @if (count($products) != 0)
      @foreach ($products as $product)
        <x-product.card img="{{ $product->thumbnail }}" title="{{ $product->title }}" id="{{ $product->id }}" />
      @endforeach
    
      <div class="card_pages px-4">
        {{ $products->links('pagination::tailwind') }}
      </div>
      @else
        <div class="text-center"><span class="text-xl text-red-500 font-bold">Nothing Products</span></div>
      @endif
    </div>
  </div>

@endsection