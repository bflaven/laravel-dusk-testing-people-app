<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreatePeopleTest extends DuskTestCase
{
    
   public function test_chek_home_link_nav() 
       {
        $this->browse(function (Browser $browser) {
            $browser->visit('/people')
            ->assertSee('Home');
        });
        $this->browse(function (Browser $browser) {
        $browser->visit('/people')
        ->clickLink('Home', 'a');
        // ->clickLink('click me', 'button'); //for 'a' powered button
        });
    }

    public function test_chek_add_new_link_nav() 
       {
        $this->browse(function (Browser $browser) {
            $browser->visit('/people/add')
            ->assertSee('Add Person');
        });

        $this->browse(function (Browser $browser) {
        $browser->visit('/people/add')
        ->clickLink('Add Person', 'a');
        // ->clickLink('click me', 'button'); //for 'a' powered button
        });
    }

    public function test_footer() 
       {
        $this->browse(function (Browser $browser) {
        /* */
        $browser->visit('/people')        
        ->assertSee('© copyright by Officiis');
        
        // $value = $browser->attribute('div#footer', '©');
        // $value = $browser->text('div#footer');
        // $value_2 = $browser->attribute('div#footer', '© copyright by Officiis aut qui qui aut');
        });
    }

   //  public function test_form() 
   //  {
         //    $this->browse(function (Browser $browser) {
         //    // $browser->visit('/news/add')
         //            // ->assertInputValue('title', 'title');
         //    // echo $browser->visit('/news/add')->value('#title');

            // });
   //  }

    public function testExampleText()
{
    // $this->browse(function (Browser $browser) {
    //     $browser->visit('/news/add')
    //     ->text('h1#myHeader');
    //  });

    $this->browse(function (Browser $browser) {
            $value_against = 'Add Person';
            $value = $browser->visit('/people/add')->text('h1#myHeader');
            /* debug */
            // echo $value;

            $browser->visit('/news/add')
            ->value('h1#myHeader', $value)
            ->assertSee($value_against);
        });


}

// http://127.0.0.1:8000/news
// <ul class="pagination" role="navigation">


    // public function test_I_can_create_news_successfully()
    // {
    //     $this->browse(function ($browser) {
    //         $browser->visit('/news/add')
    //                 ->type('title', 'Fuck Title  2')
    //                 ->type('slug', 'fuck-slug-2')
    //                 ->select('category', 'Politics')
    //                 ->select('author', 'Jack')
    //                 ->type('short_description', 'Fuck short_description  2')
    //                 ->type('full_content', 'Fuck full_content  2')
    //                 ->press('Submit')
    //                 ->pause(5000)
    //                 ->assertPathIs('/news');
    //     });
    // }

}
