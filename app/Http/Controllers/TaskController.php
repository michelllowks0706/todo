<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $todos = Task::where('user_id', $user_id)->where('status', 1)->get();
        $ongoing = Task::where('user_id', $user_id)->where('status', 2)->get();
        $completed = Task::where('user_id', $user_id)->where('status', 3)->get();

        return view('dashboard', [
            'todos' => $todos,
            'ongoings' => $ongoing,
            'completeds' => $completed
        ]);
    }  

    public function create(Request $request)
    {
        $request->validate([
            'description' => 'required'
        ]);

        $user_id = Auth::id();

        Task::create([
            'user_id' => $user_id,
            'description' => $request->description,
            'status' => 1 //todo
        ]);

        return response()->json(['url' => '/dashboard']);
    }

    public function delete(Request $request)
    {
        $request->validate([
            'id' => 'required'
        ]);

        $task = Task::find($request->id);
        $task->delete();

        return response()->json(['url' => '/dashboard']);
    }

    public function update(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'status' => 'required'
        ]);

        $user_id = Auth::id();

        Task::where('id', $request->id)->where('user_id', $user_id)->update([
            'description' => $request->description,
            'status' => $request->status
        ]);

        return response()->json(['url' => '/dashboard']);
    }
}
