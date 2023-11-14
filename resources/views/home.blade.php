<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="" style="border: 2px solid black; padding: 15px">
        <h1>This is the home page!</h1>
        <a href="/register">Register</a><br>
        <a href="/login">Login</a>

        <div class="">
            <h2>All snippets</h2>
            @foreach($snippets as $snippet) 
                <div class="" style="margin: 10px; padding: 5px; border: 1px solid black">
                    <h3>{{$snippet['title']}}</h3>
                    {{$snippet['body']}}
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>