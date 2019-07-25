<?php

namespace Tests\Browser\Office\Employee;

use App\User;
use function PHPSTORM_META\type;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateNewEmployeeRecordTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     * @test
     * @group employee
     * @group successfullyRecordedNewEmployee
     *
     */
    public function successfullyRecordedNewEmployee()
    {
        $this->browse(function (Browser $browser) {

            factory(User::class)->create(['email' => 'jc@gmail.com']);

            $response = $browser->visit(route('office.login'))
                    ->type('email', 'jc@gmail.com')
                    ->type('password', 'password')
                    ->click('#login')
                    ->assertSee('Employee');

            $response->clickLink('Employee')
                ->type('first_name', 'Jade')
                ->type('last_name', 'Doe')
                ->type('contact_number', '09123456789')
                ->type('position', 'employee')
                ->type('email', 'jade@gmail.com')
                ->click('#add_employee')
                ->assertSee('Employee Listing')
                ->assertSee(' Jade Doe');

            $this->assertDatabaseHas(
                'employees',
                [
                   'first_name' => 'Jade',
                    'last_name' => 'Doe',
                    'contact_number' => '09123456789',
                    'position' => 'employee',
                    'email' => 'jade@gmail.com',
                ]
            );
        });
    }

    // cannotSubmitDuplicateRecords
    // unableToCreateEmployeeRecordWhenEmailIsMissing
}
