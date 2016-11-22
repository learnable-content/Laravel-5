<form action="form-receive" method="POST">
    {{ csrf_field() }}
    <input name="name" type="text">
    <button>Send</button>
</form>