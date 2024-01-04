<?php

?>
@include ('menu')

{{--<a href="/">main</a>--}}
<h1>
    admin
</h1>
<form method="POST" action="/posts">
    @csrf
    <label for="title">Заголовок:</label>
    <input type="text" id="title" name="title" required>

    <label for="short_description">Краткое описание:</label>
    <textarea id="short_description" name="short_description" required></textarea>

    <label for="body">Текст поста:</label>
    <textarea id="body" name="body" required></textarea>

    <button type="submit">Создать пост</button>
</form>
