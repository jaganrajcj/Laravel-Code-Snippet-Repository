<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="" style="border: 3px solid black; padding: 30px">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>
</body>
</html>