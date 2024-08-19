<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Todo;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Get the authenticated user

        // Fetch pending and completed todos
        $pendingTodos = $user->todos()->where('is_completed', false)->get();
        $completedTodos = $user->todos()->where('is_completed', true)->get();

        return view('dashboard', ['pendingTodos' => $pendingTodos, 'completedTodos' => $completedTodos]);
    }
}
