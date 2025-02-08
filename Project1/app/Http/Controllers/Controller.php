<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
}

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        return response()->json(Task::all());
    }

    // Show a specific task
    public function show(Task $task)
    {
        return response()->json($task);
    }

    // Store a new task
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean'
        ]);

        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // Update a task
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'is_completed' => 'boolean'
        ]);

        $task->update($request->all());
        return response()->json($task);
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(null, 204);
    }
}
