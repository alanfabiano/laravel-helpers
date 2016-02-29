## Laravel 5 Helpers for Laravel Projects

In the `require` key of `composer.json` file add the following

    "alanfabiano/laravel-helpers": "0.0.1"

## Documentation

* [Date](#arrays)
    * [date_convert](#date_convert)
    
    
<a name="Date"/>
## Date

<a name="date_convert"/>
### date_convert

```php
/**
	 * Change date and time format.
	 *
	 * @param $date, $input, $output
	 * @return $date format $output
*/
function date_convert(string $date, string $input, string $output)
```