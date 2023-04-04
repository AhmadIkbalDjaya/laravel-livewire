@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="mb-4">
      <a href="{{ route('user.index') }}" class="btn btn-link">< back</a>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" value="{{ $user->name }}" class="form-control" id="name" disabled>
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="text" value="{{ $user->email }}" class="form-control" id="email" disabled>
    </div>
  </div>
@endsection