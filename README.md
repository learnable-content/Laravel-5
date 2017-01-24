![](Laravel_5_Basics_handouts/headings/2.3 .png)

# What are requests

Requests are any input that comes to the server. Requests can come in from the browser via the `GET` HTTP verb or any other verb (`POST`, `PUT`, `DELETE`, etc).

Laravel comes with a lot of methods that can be used to grab this request, and to pass along information to the rest of our application.

## Type Hinting Request

Below is an example of the way we will be interfacing with the request object. We will be type hinting the request into our method. Now we can access the `name` input whether it is a `GET` parameter or if the request is coming in through a `POST` form.

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
If the request value is an array, you can access array elements using the dot notation. Here's an example:

```
// request values
array [
  "form" => array [
    "firstname" => "Alan",
    "lastname" => "Doe"
  ]
]
```

We can get the firstname like this.

```
$request->input("form.firstname"); // Alan
```

## Other Helpful Methods

### $request->path();

Perhaps you want to get a path from the URL, such as `http://blog.app/path/to/get`. Using `$request->path()` will return `path/to/get`.

### $request->has('name');

To check if the input exists on the request you would want to do `$request->has('input_name');`. This will check whether the request coming across has the input before proceeding. This method returns a boolean.

### $request->all();

If we need the full request array we would use the following `$request->all();` which would return a full array of the request.

### $request->old('title');

If we would like to access old request, for say, sticky forms, so that the user does not need to reinput their information on a form if validation fails, we would need to access it with the following `$request->old('title')`. To use this in our form we would do `<input type="text" name="title" value="{{ old('title') }}">`.
