<?php

use function Laravel\Folio\name;
name('categories.show');
?>

<x-blog>
    <div class="leftcolumn">
        @forelse ($category->posts as $post)
            <div class="card">
                <h2><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></h2>
                <h5>{{ $post->created_at->diffForHumans() }}</h5>
                <p>{{ $post->content }}</p>
            </div>
        @empty
            <p>Blog hasn't any post</p>
        @endforelse
    </div>
</x-blog>
