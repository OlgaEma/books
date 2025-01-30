@extends('layouts/main')

@section('content')
<form action="{{ route('admin.store') }}" method="POST">
    @csrf

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    

    
    <label for="bio">Bio:</label>
    <textarea name="bio" id="bio"></textarea>


    <button type="submit">Create Author</button>
</form>
@endsection