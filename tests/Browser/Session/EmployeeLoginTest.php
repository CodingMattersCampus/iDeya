<?php

namespace Tests\Browser\Session;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Hash;
use App\User;

class EmployeeLoginTest extends DuskTestCase
{
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @return void
     * @group User
     * @test
     */
    public function successfullyLoggedIn()
    {
        factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
        ]);
        $this->browse(function (Browser $browser) {
            $browser->visit(route('login'))
                    ->type('email', 'jcwaga21@gmail.com')
                    ->type('password', 'secret')
                    ->click('#login')
                    ->assertSee('Welcome!');
        });
    }
}
