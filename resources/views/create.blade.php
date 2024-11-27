<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新しいタスクを作成</title>
</head>
<body>
    <h1>新しいタスクを作成</h1>

    <!-- タスク作成フォーム -->
    <form action="/tasks" method="POST">
        @csrf <!-- CSRFトークン -->
        
        <label for="title">タイトル:</label>
        <input type="text" id="title" name="title" placeholder="タスクのタイトルを入力" required>
        
        <label for="description">詳細:</label>
        <textarea id="description" name="description" placeholder="タスクの詳細を入力"></textarea>
        
        <button type="submit">作成</button>
    </form>
</body>
</html>