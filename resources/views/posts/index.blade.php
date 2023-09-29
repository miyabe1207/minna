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
            <a href='/posts/create'>create</a>
            @foreach ($posts as $post)
                <h2 class='disease_name'>
                    <a href="/posts/{{ $post->id }}">{{ $post->disease_name }}</a>
                </h2>
                <a href="/symptoms/{{ $post->symptoms->id }}">{{ $post->symptoms->name }}</a>
                <p class='therapeutic_method'>{{ $post->therapeutic_method }}</p>
                <p class='hospital_name'>{{ $post->hospital_name }}</p>
                <p class='doctor_name'>{{ $post->doctor_name }}</p>
                
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="deletePost({{ $post->id }})">delete</button> 
                </form>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
</html>