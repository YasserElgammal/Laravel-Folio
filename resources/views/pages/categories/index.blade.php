<?php
$categories = App\Models\Category::with('posts')->get();
?>
<x-blog>
    <div class="leftcolumn">
        <div class="card">

            <h2>Blog Categories :</h2>
            <ul style="list-style-type:disc;">
                @forelse ($categories as $category)
                    <li><a href="{{ route('categories.show', ['category' => $category]) }}"> {{ $category->name }} </a>
                    </li>
                @empty
            </ul>
            <p>Blog hasn't any category</p>
            @endforelse
        </div>
    </div>
</x-blog>
