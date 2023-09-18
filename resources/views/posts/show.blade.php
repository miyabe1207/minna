<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2 class="disease_name">{{ $post->disease_name}}</h2>
        <h3 class="content">
            <p class='therapeutic_method'>{{ $post->therapeutic_method }}</p>
            <p class='hospital_name'>{{ $post->hospital_name }}</p>
            <p class='doctor_name'>{{ $post->doctor_name }}</p>
        </h3>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>