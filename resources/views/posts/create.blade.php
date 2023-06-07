<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <form action="/posts" method="POST" class="form-post">
        <h2>Crear post</h2>
        @csrf
        <div class="form-group">
            <label for="title">Titulo</label>
            <input type="text" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="excerpt">Resumen</label>
            <textarea name="excerpt" cols="30" id="excerpt" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="content">Contenido</label>
            <textarea name="content" cols="30" id="content" rows="10"></textarea>
        </div>
        <div>
            <button type="submit" class="btn">Guardar</button>
        </div>
    </form>
    
</body>
</html>