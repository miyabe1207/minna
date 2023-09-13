<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>karte</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>みんなのカルテ</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <h2 class='disease_name'>
                    <a href="/posts/{{ $post->id }}">{{ $post->disease_name }}</a>
                </h2>
                <p class='therapeutic_method'>{{ $post->therapeutic_method }}</p>
                <p class='hospital_name'>{{ $post->hospital_name }}</p>
                <p class='doctor_name'>{{ $post->doctor_name }}</p>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>