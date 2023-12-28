@extends('layouts.basic')

@section('content')
  
  <x-form.form-body back_link="{{ route('category.index') }}" link="{{ route('category.store') }}" title="Create an new Category">
    <x-form.field name="category" holder="category" helperText="maximum length 100 symbols" value="{{ old('category') }}" />
  </x-form.form-body>


@endsection