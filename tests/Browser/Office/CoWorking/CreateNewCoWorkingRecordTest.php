<?php

namespace Tests\Browser\Office\CoWorking;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\Helpers\UserFactoryHelper;

class CreateNewCoWorkingRecordTest extends DuskTestCase
{
    use DatabaseMigrations;
    use UserFactoryHelper;
    /**
     * A Dusk test example.
     * @test
     * @group successfullyRecordedNewCoWorking
     * @return void
     */
    public function successfullyRecordedNewCoWorking()
    {
        $this->browse(function (Browser $browser) {
            $email = 'jc@gmail.com';
            $this->mockAdminUser($email);
            $response = $browser->visit(route('office.login'))
                ->type('email', $email)
                ->type('password', 'password')
                ->click('#login');

            $response->clickLink('Users')
                ->click('#create-coworking')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('email', 'jade@gmail.com')
                ->click('#add_coworker')
                ->assertSee('User Listing')
                ->assertSee('Jade Doe');

            $this->assertDatabaseHas(
                'users',
                [
                    'email' => 'jade@gmail.com',
                    'type' => 'co-worker'
                ]
            );
        });
    }
}
