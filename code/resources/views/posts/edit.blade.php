<form method="POST" action="{{ action('PostsController@update', $post->id) }}">
    <input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <input type="text" name="title" value="{{ $post->title }}">
    <textarea name="body">{{ $post->body }}</textarea>
    <button>Send</button>
</form>