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
</body>
</html>