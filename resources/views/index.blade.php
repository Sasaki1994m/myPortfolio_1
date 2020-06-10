
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>LunchMap</title>
  <style>body {padding: 10px;}</style>
</head>
<body>
    <h1>勤怠一覧</h1>

    @foreach ($users as $user)
    <p>
        {{ $user->name }},
        {{ $user->login_id }},
        {{ $user->timestamps->punchIn }},
        {{ $user->timestamps->punchOut }}
    </p>
    @endforeach
</body>
</html>