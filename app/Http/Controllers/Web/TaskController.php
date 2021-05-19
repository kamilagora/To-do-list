<?php

namespace App\Http\Controllers\Web;

use App\Models\Task;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'activeTasks' => Task::where('status', Task::getAvailableStatuses('Active'))->get(),
            'completedTasks' => Task::where('status', Task::getAvailableStatuses('Completed'))->get()
        ]);
    }

    public function add()
    {
        return view('tasks.add', [

            'defaultStatus' => Task::getStatus('Active')
        ]);
    }

    public function store(StoreTaskRequest $request)
    {
        $task = new Task($request->validated());

        return redirect(route('tasks.show', 
        ['task' => Task::create($request->validated())]));
    }

    public function show(Task $task)
    {
    }

    public function edit(Task $task)
    {
    }

    public function update(Task $task)
    {
    }

    public function delete(Task $task)
    {
    }
}
