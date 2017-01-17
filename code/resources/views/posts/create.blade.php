<form method="POST" action="{{ action('PostsController@store') }}">
    {{ csrf_field() }}
    <input type="text" name="title">
    <textarea name="body"></textarea>
    <button>Send</button>
</form>