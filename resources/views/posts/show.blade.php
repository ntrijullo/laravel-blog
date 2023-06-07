<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="container">
        <article>
            <h1>{{$post->title}}</h1>
            <p>{{$post->excerpt}}</p>
        </article>
        <a href="/"><< Inicio</a>
        <a href="/posts/{{$post->id}}/edit">Editar</a>
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('¿esta seguro que desea borrar este post?')">Eliminar</button>
        </form>
        <h4>Comentarios</h4>
        <div class="comments">
            @foreach ($comments as $comment )
                <div>{{$comment->content}}</div>
                <small style="color:#aaa">{{$comment->name}}</small>
                <hr>
            @endforeach
        </div>
        <div class="new-comment">
            <form action="/comments" method="POST" >
                @csrf
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="content">Comentario</label>
                    <textarea name="content" id="" cols="30" rows="10"></textarea>
                </div>
                <div id="sub-comment" class="form-group">
                    <button type="submit" id="btn-submit-comment"> Guardar</button>
                </div>

            </form>
        </div>
    </div>
</body>
</html>