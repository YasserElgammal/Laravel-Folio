<?php
$posts = App\Models\Post::with('category')->get();
?>
<x-blog>
    <div class="leftcolumn">
        @forelse ($posts as $post)
            <div class="card">
                <h2><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></h2>
                <h5>{{ $post->category->name }}</h5>
                <p>{{ $post->content }}</p>
            </div>
        @empty
            <p>Blog hasn't any post</p>
        @endforelse
    </div>
</x-blog>
