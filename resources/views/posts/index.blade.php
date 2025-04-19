<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<style>

    .container {
        max-width: 1280px;
        margin: 0px auto;
    }

    li {
        list-style: none;
        background-color: rgb(240, 240, 240);
        padding: 30px;
        margin-bottom: 30px
    }
</style>

<body>

    <div class="container">

        <nav>
            <a href="{{ route('posts.create') }}">Write a blog</a>
        </nav>
    
        @forelse ($posts as $post)
            <li>
                <h1>{{ $post->title }}</h1>
                <p>
                    {{ $post->body }}
    
                </p>
            </li>
    
        @empty
            <p>There is no blogs available.</p>
        @endforelse

    </div>


</body>

</html>
