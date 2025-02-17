@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Contact List</h2>
    <a href="{{ route('contacts.create') }}" class="btn btn-success">Add Contact</a>
    <form action="{{ route('contacts.import') }}" method="POST" enctype="multipart/form-data" class="mt-3">
        @csrf
        <input type="file" name="xml_file" required>
        <button type="submit" class="btn btn-primary">Import XML</button>
    </form>
    <table class="table mt-3">
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{$contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->phone }}</td>
            <td>
                <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
