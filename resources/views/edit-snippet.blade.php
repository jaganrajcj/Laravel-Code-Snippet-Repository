<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="" style="margin-top: 10px; border: 2px solid black; padding: 15px">
        <h1>Edit Snippet</h1>
        <form action="/edit-snippet/{{$snippet->id}}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" placeholder="Title" value={{$snippet->title}}> <br/><br/>
            <textarea name="body" placeholder="Code...">{{$snippet->body}}</textarea><br/><br/>
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
</body>
</html>