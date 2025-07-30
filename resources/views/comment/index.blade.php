<x-layout :title="$pageTitle">
    <h2>My blogs</h2>

    @foreach($comments as $comment)
        <h1>{{ $comment->content }}</h1>
        <p>{{ $comment->author }}</p>
        <p>{{ $comment->post->title }}</p>
    
    @endforeach

</x-layout>