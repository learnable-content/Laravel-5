![](headings/2.3 .png)

# What are requests

Requests are any input that comes to the server. Request can come in from the browser via the `GET` HTTP verb or any other verb (`POST`, `PUT`, `DELETE`, etc)

Laravel comes with a lot of methods for use to grab this request and use them to pass along information to the rest of our application.

## Type hinting request

Below is an example of the way we will be interfacing with the request object. We will be type hinting the request into our methods to a parameter into the method. Now we can access the name input whether it is a `GET` parameter or if the request is coming in through a `POST` form.

```
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');

        // ... code
    }
}
```

*Bonus:*
If the request value is an array, you can access array elements using the dot notation, here's an example:

```
// request values
array [
  "form" => array [
    "firstname" => "Alan"
    "lastname" => "Doe"
  ]
]
```

We can get the firstname like this.

```
$request->input("form.firstname"); // Alan
```

## Other helpful methods

### $request->path();

Perhaps you want to get a path from the url like `http://blog.app/path/to/get`. By using `$request->path()` it will return `path/to/get`.

### $request->has('name');

To check if the input exists on the request you would want to do `$request->has('input_name');` to see if the request coming across has the input before proceeding. This method returns a boolean for us to check across.

### $request->all();

If we need the full request array we would use the following `$request->all();` which would return a full array of the request.

### $request->old('title');

If we would like to access old request for say stick forms so that the user does not need to reinput their information on a form if validation fails we would need to access it with the following `$request->old('title')`. To use this in our form we would do `<input type="text" name="title" value="{{ old('title') }}">`.
