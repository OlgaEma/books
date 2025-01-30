
@extends('layouts/main')

@section('content')

@foreach ($authors as $author)
<ul>
    <li>Name:{{ $author->name }} Bio:{{ $author->bio }}</li>
</ul>
@endforeach

@endsection