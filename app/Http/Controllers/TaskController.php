<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth::id())->get();
        return view('todo', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => ['required', 'string', 'max:255'],
        ]);

        Task::create([
            'name' => $request->task,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        if($task->user_id == Auth::id()) 
        {
            $task->delete();
        }
        return redirect()->route('tasks.index');
    }

}
