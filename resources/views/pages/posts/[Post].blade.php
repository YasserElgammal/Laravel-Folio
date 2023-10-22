<?php

use function Laravel\Folio\name;

name('posts.show');
?>
<x-blog>
    <div class="leftcolumn">
        <div class="card">
            <h2>{{ $post->title }}</h2>
            <h5>{{ $post->category->name }}</h5>
            <p>{{ $post->content }}</p>
        </div>
    </div>
</x-blog>
