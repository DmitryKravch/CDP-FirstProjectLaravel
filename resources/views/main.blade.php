<?php

use App\Models\Post;
?>
@include ('menu')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">


{{--<a href="/">main</a>--}}
{{--<a href="/admin">admin</a>--}}
<div>
    <h1>BGG</h1>
    @foreach($posts as $item)
        <div class="main_post">
            <div class="main_title" > <?= $item['title']?> </div>
            <div class="main_short_description"><?= $item['short_description']?></div>
            <div class="main_body_post"><?= $item['body'] ?></div>
        </div>
    @endforeach
</div>
