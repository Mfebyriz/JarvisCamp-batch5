<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Collator;
use Illuminate\Http\Request;
use PHPUnit\Runner\DeprecationCollector\Collector;

class TaskController extends Controller
{
    //mendapatkan dan menampilkan data tugas
    public function index()
    {
        //mendapatkan data tugas dari model
        $task = Task::ALL();
        dd($task);

        //mengirim data ke view
        return view('task.index', [
            'task' => $task
        ]);
    }

    public function detail($id)
    {
        $tasks = collect(Task::getALL())->firstWhere('id', $id);

        return view('task.detail', [
            'tasks' => $tasks
        ]);
    }
}
