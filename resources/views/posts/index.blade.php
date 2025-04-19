<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <nav>
        <a href="{{ route('posts.create') }}">Write a blog</a> </nav>

    @forelse ($posts as $post )

    <li>
        <h1>{{ $post->title}}</h1>
        <p>
            {{ $post->body }}

        </p>
    </li>
        
    @empty
    <p>There is no blogs available.</p>
    @endforelse
    

</body>
</html>