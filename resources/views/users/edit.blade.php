@extends('layouts.master')

@push('style')
    @livewireStyles
@endpush

@push('script')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
      <div class="mb-4">
        <a href="{{ route('user.index') }}" class="btn btn-link">< back</a>
      </div>
      <div class="row mb-4">
        <div class="col-md-6">
          @livewire('user-edit', ['user' => $user])
        </div>
      </div>
    </div>
@endsection