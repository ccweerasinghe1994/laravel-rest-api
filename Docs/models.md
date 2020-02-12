# **CREATING MODELS**

> Type those commands in cmd

```v
> php artisan make:model Buyer
Model created successfully

> php artisan make:model Seller
Model created successfully

<!-- using -m migration will be created -->
> php artisan make:model User -m
Model created successfully

```

---

> Seller Model change the inheritance to User

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends User
{

}



```

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buyer extends User
{

}

```
