@extends('layouts.basic')

@section('content')
  
  <x-form.form-body back_link="{{ route('category.index') }}" link="{{ route('category.update', $category->id) }}" title="Create an new Category">
    <x-form.field name="category" holder="category" helperText="maximum length 100 symbols" value="{{ $category->category }}" />
  </x-form.form-body>


@endsection