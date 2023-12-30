<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{

    public static function prepare(): void
{
    //  static::startChromeDriver();
}


    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {   
        
      

        $this->browse(function (Browser $browser) {

         

            // $browser->visit('/');
             


            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }
}
