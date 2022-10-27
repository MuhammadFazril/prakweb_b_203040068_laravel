@extends('layouts.main')

@section('container')
<h1 class="mb-5">Posts Categories</h1>

@foreach ($categories as $category)
<ul>
  <li>
  <a href="/posts/{{ $category->slug }}">{{ $category->name }}</a>
  </li>
</ul>

  @endforeach  
  
@endsection