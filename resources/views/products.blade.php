@extends('layouts.app')

@push('style')
    @livewireStyles
@endpush
@push('script')
    @livewireScripts
@endpush

@section('body')
  <div class="container">
    <h1>Products</h1>
    <hr>
    @livewire('products-table')
  </div>
@endsection