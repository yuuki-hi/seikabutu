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
        <form action="/posts" method="post">
            @csrf
            <div>
                <h2>Title</h2>
                <input type="text" name="post[title]">
            </div>
            <div>
                <h2>Body</h2>
                <textarea name="post[body]"></textarea>
            </div>
            <div><input type="submit" value="保存する"></div>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
