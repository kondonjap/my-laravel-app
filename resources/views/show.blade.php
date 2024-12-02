<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスクの詳細</title>
</head>
<body>
    <h1>タスクの詳細</h1>

    <p><strong>タイトル:</strong> {{ $task->title }}</p>
    <p><strong>詳細:</strong> {{ $task->description }}</p>

    <a href="/tasks">タスク一覧に戻る</a>

    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="margin-top: 20px;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('本当に削除しますか？')">削除</button>
    </form>
</body>
</html>