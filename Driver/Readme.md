# lab-selenium-driver

## Travail à faire

Utiliser de Selenium driver pour test le lab-crud-standard

## Commandes 

```bash
composer require --dev laravel/dusk
```

````php
class WebTest extends PHPUnit_Extensions_Selenium2TestCase
{
    protected function setUp()
    {
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://www.example.com/');
    }

    public function testTitle()
    {
        $this->url('http://www.example.com/');
        $this->assertEquals('Example WWW Page', $this->title());
    }

}
````

## Références
- https://unogeeks.com/laravel-selenium/
- https://laravel.com/docs/10.x/dusk


- https://github.com/php-webdriver/php-webdriver

- https://laravel.com/docs/10.x/testing 
- [phpunit-selenium](https://github.com/giorgiosironi/phpunit-selenium)
- [Laravel Test Helpers for Selenium](https://laracasts.com/series/whatcha-working-on/episodes/1)