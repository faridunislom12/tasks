<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = $request->name;
        $description = $request->description;
        $status = $request->status;
        $date = $request->date;

        $query = Task::query();

        if ($name !== null) {
            $query->where('name', $name);
        }
        if ($description !== null) {
            $query->where('description', $description);
        }
        if ($status !== null) {
            $query->where('status', $status);
        }
        if ($date !== null) {
            $query->where('date', $date);
        }

        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Task;

        $data->name = $request->get('name');
        $data->description = $request->get('description');
//        $data->date = (new \DateTime())->format('Y-m-d'));
        $data->status = $request->get('status');
        $data->date = $request->get('date');

        $data->save();

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = DB::table('tasks')->find($id);

        return response()->json($data);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = Task::find($id);

        $data->name = $request->get('name');
        $data->description = $request->get('description');
        $data->status = $request->get('status');
        $data->date = $request->get('date');

        $data->save();

        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $result = Task::find($id)->delete();

        return response()->json($result);
    }
}
