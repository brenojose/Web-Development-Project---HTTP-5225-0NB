<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Dashboard</h1>

        <div class="row">
            <!-- Pending Todos -->
            <div class="col-md-6">
                <h2>Pending Todos</h2>
                <ul>
                    @forelse($pendingTodos as $todo)
                        <li>{{ $todo->title }}</li>
                    @empty
                        <li>No pending todos.</li>
                    @endforelse
                </ul>
            </div>

            <!-- Completed Todos -->
            <div class="col-md-6">
                <h2>Completed Todos</h2>
                <ul>
                    @forelse($completedTodos as $todo)
                        <li>{{ $todo->title }}</li>
                    @empty
                        <li>No completed todos.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
</body>
</html>