<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        // データベースから全タスクを取得
        $tasks = Task::all(); // タスクモデルを使用してすべてのタスクを取得

        // ビューにデータを渡す
        return view('tasks', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // タスク作成フォームのビューを返す
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable|max:1000',
        ]);

        // データベースに保存
        Task::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // タスク一覧ページにリダイレクト
        return redirect('/tasks')->with('success', 'タスクが作成されました！');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
