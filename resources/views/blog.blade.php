@extends('layouts.main')
@section('container')
  @foreach ($post as $post)
    <article>
      <h2>
        <a href="/detail/{{ $post->slug }}">{{ $post->title }}</a>
      </h2>
      <p>{{ $post->excerpt }}</p>
    </article>
  @endforeach
@endsection
