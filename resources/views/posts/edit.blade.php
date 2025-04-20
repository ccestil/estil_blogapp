<h1>New blog!</h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

  <label for="title">Blog title: </label> <br>
  <input type="text" name="title" value="{{ ( $post->title) }}"><br><br>

  <textarea  name="body" rows="4" cols="50" value="{{ ($post->body) }}"></textarea>
  <br><br>
  <input type="submit" value="update">
  <a href="{{ route('posts.index') }}">cancel</a>
</form>