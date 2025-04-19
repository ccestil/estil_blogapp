<h1>New blog!</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

  <label for="title">Blog title: </label> <br>
  <input type="text" name="title" value="{{ old('title') }}"><br><br>

  <textarea  name="body" rows="4" cols="50" value="{{ old('body') }}"></textarea>
  <br><br>
  <input type="submit" value="create">
</form>