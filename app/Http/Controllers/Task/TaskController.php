<?php

namespace App\Http\Controllers\Task;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\TaskStoreRequest;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskController extends Controller
{

    public function index() : ResourceCollection
    {
        $tasks = Task::all();

        return TaskResource::collection($tasks);
    }


    public function store(TaskStoreRequest $request) : TaskResource
    {
        $created_task = Task::create($request->validated());

        return new TaskResource($created_task);


    }


    public function show(Task $task)
    {

        return new TaskResource($task);
    }


    public function update(TaskStoreRequest $request, Task $task)
    {

    }


    public function destroy($id)
    {
        //
    }
}
