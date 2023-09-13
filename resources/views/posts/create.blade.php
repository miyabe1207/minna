<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>karte</title>
    </head>
    <body>
        <h1>みんなのカルテ</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="disease_name">
                <h2>病名</h2>
                <input type="disease_name" name="post[disease_name]" placeholder="病名" value="{{ old('post.disease_name') }}"/>
                <p class="disease_name__error" style="color:red">{{ $errors->first('post.disease_name') }}</p>
            </div>
            <div class="therapeutic_method">
                <h2>治療法</h2>
                <textarea name="post[therapeutic_method]" placeholder="治療法">{{ old('post.therapeutic_method') }}</textarea>
                <p class="therapeutic_method__error" style="color:red">{{ $errors->first('post.therapeutic_method') }}</p>
            </div>
            <div class="hospital_name">
                <h2>病院名</h2>
                <textarea name="post[hospital_name]" placeholder="病院名">{{ old('post.hospital_name') }}</textarea>
                <p class="hospital_name__error" style="color:red">{{ $errors->first('post.hospital_name') }}</p>
            </div>
             <div class="doctor_name">
                <h2>医師名</h2>
                <textarea name="post[doctor_name]" placeholder="医師名">{{ old('post.doctor_name') }}</textarea>
                <p class="doctor_name__error" style="color:red">{{ $errors->first('post.doctor_name') }}</p>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>