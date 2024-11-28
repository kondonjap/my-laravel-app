<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
</head>
<body>
    <h1>Todo App</h1>
    <p>これはLaravelの最初のアプリです。</p>

    <!-- タイトル入力フォーム -->
    <form action="/tasks" method="POST">
        @csrf <!-- CSRF保護用 -->
        <label for="title">タイトルを入力:</label>
        <input type="text" id="title" name="title" placeholder="タイトルを入力" required>
        <button type="submit">追加</button>
    </form>

    <!-- タスク一覧の表示 -->
    <h2>タスク一覧</h2>
    @if($tasks->isEmpty())
        <p>現在タスクはありません。</p>
    @else
        <ul>
            @foreach ($tasks as $task)
                <a href="/tasks/{{ $task->id }}">{{ $task->title }}</a>
            @endforeach
        </ul>
    @endif
</body>
</html>