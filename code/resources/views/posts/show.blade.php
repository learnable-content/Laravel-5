<form method="POST" action="{{ action('PostsController@destroy', $post->id) }}">
    <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
    <button>Delete Post</button>
</form>