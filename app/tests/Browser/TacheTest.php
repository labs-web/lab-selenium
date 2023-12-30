<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TacheTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function ajouter_tach_test(): void
    {
        $this->browse(function (Browser $browser) {
           
            $this->visit('/');
            $this->visit('/add.task');
            $this->type('aaa', 'nom');
            $this->type('bbb', 'description');
            $this->press('Ajouter');
            $this->seePageIs('/add.task');
           

           
        });
    }
}
