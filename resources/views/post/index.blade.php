<x-layout :title="$pageTitle">
    <h2>My blogs</h2>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <p>{{ $post->auhtor }}</p>
    
    @endforeach

</x-layout>