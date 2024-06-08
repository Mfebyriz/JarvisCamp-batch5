<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Status;
use App\Models\Task;
use Database\Seeders\TaskSeeder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $task = Task::all();

        return view('task.index', [
            'task' => $task
        ]);
    }
    public function detail($id)
    {
        $tasks = Task::find($id);
        return  view('task.detail', [
            'tasks' => $tasks
        ]);
    }
    public function list()
    {
        $task = Task::all();
        return view('task.list', compact('task'));
    }
    public function create()
    {
        $status = Status::all();
        $categories = Category::all();
        return view('task.create', ['status' => $status, 'categories' => $categories]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'category_id' => 'required'
        ]);
        Task::create($data);
        return redirect('/task/list');
    }
    public function edit($id)
    {
        $status = Status::all();
        $categories = Category::all();
        $task = Task::find($id);
        return view('task.edit', ['task' => $task, 'status' => $status, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $data = $request->validate([
            'name' => 'required',
            'deadline' => 'required',
            'description' => 'required',
            'status_id' => 'required',
            'category_id' => 'required'
        ]);
        $task->update($data);
        return redirect()->route('task.list');
    }
    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('task.list');
    }
}
