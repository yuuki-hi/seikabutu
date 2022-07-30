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
        <form action="/post" method="post">
            <div><input type="text" name="title"></div>
            <div><textarea name="detail"></textarea></div>
            <div><input type="submit" value="保存する"></div>
        </form>
    </body>
</html>
