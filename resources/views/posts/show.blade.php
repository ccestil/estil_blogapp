<x-layout>


    <div class="container">

        <h1>{{ $post->title }}</h1>
        <p>
            {{ $post->body }}

        </p>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>


        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete">
        </form>

    </div>

</x-layout>
