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
        $tasks = Task::with('priority')->with('user')->get();

        return TaskResource::collection($tasks);
    }


    public function store(TaskStoreRequest $request) : TaskResource
    {
        $created_task = Task::create($request->validated());

        return new TaskResource($created_task);


    }


    public function show(Task $task) : ResourceCollection
    {
        return new ResourceCollection(Task::with('priority')->with('user')->find($task));
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
