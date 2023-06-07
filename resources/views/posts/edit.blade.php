<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Post</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <form action="/posts/{{$post->id}}" method="POST" class="form-post">
        <h2>Editar post</h2>
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="excerpt">Resumen</label>
            <textarea name="excerpt" cols="30" id="excerpt" rows="10">{{$post->excerpt}}</textarea>
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea name="content" cols="30" id="content" rows="10">{{$post->content}}</textarea>
        </div>
        <div>
            <button type="submit" class="btn">Actualizar</button>
        </div>
        <a href="/posts/{{$post->id}}">Cancelar</a>
    </form>
    
</body>
</html>