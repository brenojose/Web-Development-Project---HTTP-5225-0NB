<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile and Todos</title>
</head>
<body>
    <h1>Profile Details</h1>
    <p><strong>Address:</strong> {{ $profile->address }}</p>
    <p><strong>Phone Number:</strong> {{ $profile->phone_number }}</p>

    <h2>Todo Lists</h2>
    @if ($profile->user->todos->isEmpty())
        <p>No todos found for this profile.</p>
    @else
        <ul>
            @foreach ($profile->user->todos as $todo)
                <li>{{ $todo->title }} - {{ $todo->description }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
