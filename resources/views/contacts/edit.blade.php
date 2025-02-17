@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Contact</h2>
    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $contact->name }}">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control" value="{{ $contact->phone }}">
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection
