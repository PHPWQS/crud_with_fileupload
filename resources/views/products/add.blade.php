@extends('layouts.basic')

@section('content')
  
  <x-form.form-body back_link="{{ route('product.index') }}" link="{{ route('product.store') }}" title="Create an new Product">
    <x-form.field name="title" holder="title" helperText="maximum length 100 symbols" value="{{ old('title') }}" />
    <x-form.field name="price" holder="price" value="{{ old('price') }}" />
    <x-form.textarea name="description" holder="description" value="{{ old('description') }}" />
    <div class="row mt-3">
      <input type="file" name="thumbnail">
    </div>  
    <div class="row mt-3">
      <select multiple="" name="categories[]" class="w-full border border-gray-300 pt-2 pl-3">
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->category }}</option>
        @endforeach
      </select>
    </div>
  </x-form.form-body>


@endsection