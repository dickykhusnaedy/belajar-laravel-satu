@extends('layouts.main')
@section('container')
  @foreach ($post as $post)
    <article>
      <h2>
        <a href="/detail/{{ $post['slug'] }}">{{ $post['title'] }}</a>
      </h2>
      <h5>{{ $post['author'] }}</h5>
      <p>{{ $post['body'] }}</p>
    </article>
  @endforeach
@endsection
