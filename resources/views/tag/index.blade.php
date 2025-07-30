<x-layout :title="$pageTitle">
    <h1>Tags</h1>

    @foreach($tags as $tag)
        <h2>{{ $tag->title }}</h2>
    
    @endforeach

</x-layout>