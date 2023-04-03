@extends('layouts.master')

@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
      <h1 class="mb-4">Belajar CRUD Menggunakan Livewire</h1>
      <div class="row">
        <div class="col-md-6">
          <div>@livewire('user-create')</div>
        </div>
      </div>
      <div>@livewire('user-table')</div>
    </div>
@endsection