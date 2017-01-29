# Intervention Message

Quick and easy Flash Message setup for Laravel.

## Installation

Install Intervention Message with Composer.

    $ composer require intervention/message

The package is built to work with the Laravel Framework. The integration is done in seconds.

Open your Laravel config file `config/app.php` and add the following lines.

In the `$providers` array add the service providers for this package.
    
    'providers' => array(

        Intervention\Message\MessageServiceProvider::class

    ),
    

Add the facade of this package to the `$aliases` array.

    'aliases' => array(

        ...

        'Message' => Intervention\Message\Facades\Message::class

    ),

## Usage

### Code Example

```php
// add a flash message anywhere you like
Message::add('This is my message.');

// the following method retrieves all messages
// and returns them formated as a view
echo Message::display();
```

### Custom View

You can create a local version of the view for customization by running the `publish` artisan command:

    php artisan vendor:publish --provider="Intervention\Message\MessageServiceProviderLaravel5"

## License

Intervention Image is licensed under the [MIT License](http://opensource.org/licenses/MIT).

Copyright 2014 [Oliver Vogel](http://olivervogel.com/)
