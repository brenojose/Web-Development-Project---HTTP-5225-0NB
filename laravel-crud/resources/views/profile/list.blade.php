@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profiles List</h2>
    <a href="{{ route('profiles.create') }}" class="btn btn-success mb-3">Add New Profile</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Address</th>
                <th>Phone Number</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->user->name }}</td>
                <td>{{ $profile->address }}</td>
                <td>{{ $profile->phone_number }}</td>
                <td>
                    <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
