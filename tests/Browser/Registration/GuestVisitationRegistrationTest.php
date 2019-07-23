<?php

namespace Tests\Browser\Registration;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class GuestVisitationRegistrationTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * @test
     * @group guest
     * @group visitation
     */
    public function successfulVisitationRegistration()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('email', 'jane@gmail.com')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'visitation')
                ->click('#signup')
                ->assertSee('Welcome, Jane');
        });
    }

    /**
     * @test
     * @group guest
     * @group visitation
     */
    public function errorMissingEmail()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'visitation')
                ->click('#signup')
                ->assertSee('The email field is required.');
        });
    }

    /**
     * @test
     * @group guest
     * @group visitation
     */
    public function errorMissingFirstnameAndLastname()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('email', 'jane@gmail.com')
                ->type('contact_number', '09358714654')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'visitation')
                ->click('#signup')
                ->assertSee('The first name field is required.')
                ->assertSee('The first name field is required.');
        });
    }

    /**
     * @test
     * @group guest
     * @group visitation
     */
    public function errorMissingContactNumber()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(route('home'))
                ->click("#Co-Working-Guest")
                ->type('first_name', 'Jane')
                ->type('last_name', 'Doe')
                ->type('email', 'jane@gmail.com')
                ->type('schoolorganization', 'MSU-IIT')
                ->select('purpose', 'visitation')
                ->click('#signup')
                ->assertSee('The contact number field is required.');
        });
    }
}
