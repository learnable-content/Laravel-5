# Larvel 5.2. and 5.3 differences

## Folder Structure

```
app/Http/routes.php -> routes/web.php
```

## Missing folders

```
e.g. Jobs, Listeners, Policies
```

- Mailable
- Searching (Laravel Scout) App\Model::search()
- Laravel Passport (API Authentication)
- Notifications (email, slack, sms)
- Webpack

```
<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Searchable;
}
```