<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="">
    <div class="" style="border: 2px solid black; padding: 15px">
        <h1>This is the dashboard page</h1>
        @auth
        <h3>Congrats, you are logged in</h3>
        <form action="/logout" method="post">
            @csrf
            <button>Log Out</button>
        </form>
    </div>
    <div class="" style="margin-top: 10px; border: 2px solid black; padding: 15px">
        <h1>Create New Snippet</h1>
        <form action="/create-snippet" method="post">
            @csrf
            <input type="text" name="title" placeholder="Title"> <br/><br/>
            <textarea name="body" placeholder="Code..."></textarea><br/><br/>
            <select name="language">
                <option value="python">Python</option>
                <option value="javascript">JavaScript</option>
                <option value="java">Java</option>
                <option value="csharp">C#</option>
                <option value="typescript">TypeScript</option>
                <option value="php">PHP</option>
                <option value="ruby">Ruby</option>
                <option value="go">Go</option>
                <option value="swift">Swift</option>
                <option value="kotlin">Kotlin</option>
            </select>
            <br/><br/>
            <button>Save Snippet</button>
        </form>
    </div>
    <div class="">
        <h2>All snippets</h2>
        @foreach($snippets as $snippet) 
            <div class="" style="margin: 10px; padding: 5px; border: 1px solid black">
                <h3>{{$snippet['title']}}</h3>
                <span><i>@ {{$snippet->user->name}}</i></span><br>
                {{$snippet['body']}}
                <p><a href="/edit-snippet/{{$snippet->id}}">Edit</a></p>
                <form action="/delete-snippet/{{$snippet->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete</button>
                </form>
            </div>
        @endforeach
    </div>
    @else
    <h3>You are not logged in</h3>
    @endauth
</body>
</html>