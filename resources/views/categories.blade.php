@extends('layouts.main')

@section('container')
<h1 class="mb-5">Posts Categories</h1>
  @foreach ($categories as $category)
  <ul>
    <li>
      <h2>
        <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
      </h2>
    </li>
  </ul>

    <article class="mb-5">

    </article>
  @endforeach
@endsection