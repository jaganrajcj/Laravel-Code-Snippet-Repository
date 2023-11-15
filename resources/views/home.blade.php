<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- @vite(['resources/css/app.css','resources/js/app.js']); --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.1.1/flowbite.min.js"></script> --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="" style="border: 2px solid black; padding: 15px">
        <h1>This is the home page!</h1>
        <a href="/register">Register</a><br>
        <a href="/login">Login</a><br>
        <a href="/dashboard">Dashboard</a>

        <div class="">
            <h2 class="">All snippets</h2>
            @foreach($snippets as $snippet) 
                <div class="" style="margin: 10px; padding: 5px; border: 1px solid black">
                    <h3>{{$snippet['title']}}</h3>
                    {{$snippet['body']}}
                    <p><a href="/edit-snippet/{{$snippet->id}}">Edit</a></p>
                    <form action="/delte-snippet/{{$snippet->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>