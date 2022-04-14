@extends('layouts.main_layout')
@section('content')
<div class="main-block" id="form-block-page">
  <div class="left-part">
    <i class="fa-solid fa-list-check" id="icon-form"></i>
    <h1 id="form-heading">Create project</h1>
  </div>
  <form action="submit" method="POST">
    @csrf
    <div class="title">
      <h2 id="from-title">Enter project details</h2>
    </div>
    <div class="info">
      <input type="text" name="title" placeholder="Title" required>
      <input type="text" name="excerpt" placeholder="Excerpt" required>
      <input type="text" name="body" placeholder="Body" required>
      <input type="text" name="technologies" placeholder="Technologies" required>
      <input type="text" name="image_url" placeholder="Image url">
    </div>
    <button type="submit">Create</button>
  </form>
</div>
@endsection