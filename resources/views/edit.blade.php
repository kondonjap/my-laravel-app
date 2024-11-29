<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスクを編集</title>
</head>
<body>
    <h1>タスクを編集</h1>

    <!-- 編集フォーム -->
    <form action="/tasks/{{ $task->id }}" method="POST">
        @csrf <!-- CSRF保護 -->
        @method('PUT') <!-- HTTPメソッドをPUTに指定 -->

        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" value="{{ $task->title }}" required>

        <label for="description">詳細:</label>
        <textarea id="description" name="description">{{ $task->description }}</textarea>

        <button type="submit">更新</button>
    </form>

    <a href="/tasks">タスク一覧に戻る</a>
</body>
</html>
