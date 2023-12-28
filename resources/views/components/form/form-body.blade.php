@props([
  'title', 'link', 'back_link'
])

<div class="w-3/5 mx-auto mt-5">
  <div class="header text-center mb-3"><span class="font-bold text-xl">{{ $title }}</span></div>
  <form action="{{ $link }}" enctype="multipart/form-data" method="post">
    @csrf
    {{ $slot }}
    <div class="flex justify-end mt-3 items-center">
      <a href="{{ $back_link }}" class="px-4 py-2 mr-2 bg-red-900 hover:bg-red-700 duration-100 rounded-md text-white">cancel</a>
      <button type="submit" class="px-4 rounded-lg py-2 bg-slate-900 text-white duration-100 hover:bg-slate-700">submit</button>
      </div>
  </form>
</div>