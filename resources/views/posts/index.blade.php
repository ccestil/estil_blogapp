<x-layout>


    <div class="container">

        <H2>Blogs list</H2>

        @forelse ($posts as $post)
            <li>
                <h1>{{ $post->title }}</h1>
            </li>
            <a href="{{ route('posts.show', $post->id) }}">Read blog</a>




        @empty
            <p>There is no blogs available.</p>
        @endforelse

    </div>
</x-layout>
