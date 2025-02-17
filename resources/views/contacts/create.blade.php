@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Contact</h2>
    <form action="{{ route('contacts.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" class="form-control">
        <label>Phone:</label>
        <input type="text" name="phone" class="form-control">
        <button type="submit" class="btn btn-success mt-3">Save</button>
    </form>
</div>
@endsection
