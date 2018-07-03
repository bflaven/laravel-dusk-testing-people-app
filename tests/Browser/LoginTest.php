<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    
    

    // public function testRegister() {
    //     $this->browse(function ($browser) {
    //         $browser->visit('/') //Go to the homepage
    //                 ->clickLink('Register') //Click the Register link
    //                 ->assertSee('Register') //Make sure the phrase in the argument is on the page
    //         //Fill the form with these values
    //                 ->value('#name', 'Dodo') 
    //                 ->value('#email', 'dodo@example.com')
    //                 ->value('#password', '123456')
    //                 ->value('#password-confirm', '123456')
    //                 ->click('button[type="submit"]') //Click the submit button on the page
    //                 ->assertPathIs('/home') //Make sure you are in the home page
    //         //Make sure you see the phrase in the arguement
    //                 ->assertSee("You are logged in!"); 
    //     });
    // }

        public function test_I_can_login_successfully()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                    // GOOD  
                    ->type('email', 'dodo@example.com')
                    // ERROR deliberately failed 
                    // ->type('email', 'francois_failedman@example.com')
                    ->type('password', '123456')
                    ->press('Login')
                    ->assertSee('You are logged in!');
        });
    }

}