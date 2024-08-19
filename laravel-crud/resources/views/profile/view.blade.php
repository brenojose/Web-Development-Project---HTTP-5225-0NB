@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Profile Details</h2>
    <div class="card">
        <div class="card-header">
            {{ $profile->user->name }}'s Profile
        </div>
        <div class="card-body">
            <p><strong>Address:</strong> {{ $profile->address }}</p>
            <p><strong>Phone Number:</strong> {{ $profile->phone_number }}</p>
            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-warning">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
