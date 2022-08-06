<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
        

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">-->

    </head>
    
    <body>
        <h1>Blog Name</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>{{ $post->body }}</p>
                    <form action="/posts/{{ $post->id }}" id="form_delete" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" style="display:none">
                        <p class="delete">[<span onclick="return deletePost(this);">delete</span>]</p>
                    </form>
                </div>
            @endforeach
        </div>
        <div class="paginate">
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(e){
                "use strict";
                if(confirm("削除しますか？")){
                    document.getElementById("form_delete").submit();
                }
            }
        </script>
    </body>
</html>
