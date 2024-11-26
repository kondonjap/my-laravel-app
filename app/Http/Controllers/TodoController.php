<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index(){
        return view('todo');
    }
    // Titleカラムにデータを保存
    public function store(Request $request)
    {
        // フォームから送信されたデータをバリデーション
        $request->validate([
            'title' => 'required|max:255',
        ]);

        // 新しいタスクをデータベースに保存
        Task::create([
            'title' => $request->input('title'),
        ]);

        // タスク一覧ページにリダイレクト
        return redirect('/tasks');
    }
}
