@extends('layouts.base')

@section('content')
<div class="container py-5">
  <h1>Contact Us</h1>

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
  @endif

  <form method="POST" action="{{ route('contact.submit') }}">
    @csrf

    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input id="name" name="name" class="form-control" value="{{ old('name') }}">
      @error('name') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}">
      @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <div class="mb-3">
      <label for="message" class="form-label">Message</label>
      <textarea id="message" name="message" class="form-control" rows="4">{{ old('message') }}</textarea>
      @error('message') <div class="text-danger small">{{ $message }}</div> @enderror
    </div>

    <button type="submit" class="btn" style="background-color:#f59e0b;border-color:#f59e0b;color:#fff;">Send</button>
  </form>

  <p class="mt-3">Or reach us at info@mysolar.com / (123) 456-7890</p>
</div>
@endsection
