<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }
    public function store(TaskRequest $request)
    {
        $task = new Task;

        $task->title = $request->title;
        $task->body =  $request->body;
        $task->timestamps = false;

        $task->save();

        return redirect('/tasks');
    }
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', compact('task'));
    }
    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);

        $task->title = $request->title;
        $task->body = $request->body;
        $task->timestamps = false;

        $task->save();

        return redirect('/tasks');
    }
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/tasks');
    }
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', compact('task'));
    }
}
