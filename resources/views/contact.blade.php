@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact us</h2>
</div>
<form method="post" action="{{route('contact.store')}}">
  {{csrf_field()}}
  <div class="mb-3">
    <label for="emaill" class="form-label">Email address</label>
    <input type="email" class="form-control" id="emaill" name="email"aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pesann" class="form-label">Pesan</label>
    <input type="text" class="form-control" id="pesann" name="pesan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection