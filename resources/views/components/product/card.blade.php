@props(['title', 'id', 'img'])

<div class="card mb-3 flex pr-3 justify-between items-center w-4/5 rounded-lg bg-white py-2 pl-2 mx-auto">
    <div class="data pl-3"><span class="text-lg font-bold">{{ $title }}</span></div>
    <div class="img"><img src="{{ asset('storage/images/' . $img) }}" class="w-12" alt=""></div>
    <div class="flex items-center">
      <a href="{{ route('category.edit', $id) }}">
        <button class="px-5 py-2 bg-blue-800 mr-4 text-white rounded-lg">Edit</button>
      </a>
      <a href="{{ route('product.destroy', $id) }}">
        <button class="px-3 py-2 bg-red-700 text-white rounded-lg">&times;</button>
      </a>
    </div>
</div>