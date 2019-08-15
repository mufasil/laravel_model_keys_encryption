# Laravel Model Keys Encryption

Easily encrypt your table 'Id' through the trait provides in this library.

It's very important to encrypt your **DB** values when you are exposing it to public. This package will ease your life in 2 easily steps.

**Note - this trait does not create DB columns for you. You must create your own migrations**

# Requirements

This package requires Laravel 5.6. Earlier versions of Laravel have a different model implementation that is not compatible with this package.

# Installation
```
composer require mufasil/laravel_model_keys_encryption
```

# Usage

## Add the trait to your model

You'll only need to include the columns you want to encrypt. 

This example will encrypt the `id` attribute of `user` table.

```php
use Mufasil\KeyEncryption\Traits\Encryptable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Encryptable;
    
    protected static $encryptable = [
        'id',
    ];
}
```

That's it. Enjoy...