@extends('layouts.basic')

@section('content')
  
  <div class="w-full py-3 mt-5 bg-gray-300 rounded-lg">
    <div class="card_header flex items-center justify-between px-5">
      <span class="font-bold text-lg">Categories</span>
      <a href="{{ route('category.add') }}">
        <button class="px-4 py-2 bg-slate-900 text-white rounded-md">Add Category</button>
      </a>
    </div>
    <div class="cards mt-3">
      @if (count($categories) != 0)
        @foreach ($categories as $category)
          <x-categories.card title="{{ $category->category }}" id="{{ $category->id }}" />
        @endforeach
      @else
        <div class="text-center"><span class="text-xl text-red-500 font-bold">Nothing Categories</span></div>
      @endif
    </div>
    <div class="card_pages px-4">
      {{ $categories->links('pagination::tailwind') }}
    </div>
  </div>

@endsection