<?php

namespace Tests\Browser\Office\Intern;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNewInternRecordTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     * @test
     * @group intern
     * @group successfullyRecordedNewIntern
     * @return void
     */
    public function successfullyRecordedNewIntern()
    {
        factory(User::class)->create(['email' => 'jc@gmail.com']);
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(route('office.login'))
                ->type('email', 'jc@gmail.com')
                ->type('password', 'password')
                ->click('#login');

            $response->clickLink('Users')
                ->click('#create-intern')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('email', 'jade@gmail.com')
                ->click('#add_intern')
                ->assertSee('User Listing')
                ->assertSee('Jade Doe');

            $this->assertDatabaseHas(
                'users',
                [
                    'email' => 'jade@gmail.com',
                    'type' => 'employee'
                ]
            );
        });
    }
}
