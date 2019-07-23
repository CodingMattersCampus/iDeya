<?php

namespace Tests\Browser\Inventory\Chairs;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use App\User;


class AddNewChairTest extends DuskTestCase
{
    use WithFaker;
    use DatabaseMigrations;
    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @group Appliance
     * @test
     */

    public function successfullyAddedChair()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
            ]);
            $browser->loginAs($user)->visit(route('inventory.create'))
                ->type('name', $brand)
                ->select('category','Appliance')
                ->type('description', $this->faker->sentence)
                ->type('quantity', 21)
                ->type('brand', 'Mandaue Foam')
                ->click('#submit')
                ->assertSee('Appliance');
        });
    }
    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @test
     */
    public function shouldReturnAnErrorWithoutName()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
        ]);

            $browser->loginAs($user)->visit(route('inventory.create'))
                ->type('description', $this->faker->sentence)
                ->type('quantity', 21)
                ->type('brand', 'Mandaue Foam')
                ->click('#submit')
                ->assertSee('The name field is required');
        });
    }
    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @test
     */
    public function shouldReturnAnErrorWithoutDescription()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
            ]);

            $browser->loginAs($user)->visit(route('inventory.create'))
                ->type('name', $brand)
                ->type('quantity', 21)
                ->type('brand', 'Mandaue Foam')
                ->click('#submit')
                ->assertSee('The description field is required');
        });
    }

    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @test
     */

    public function shouldReturnAnErrorWithoutQuantity()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
            ]);
            $browser->loginAs($user)->visit(route('inventory.create'))
                ->type('name', $brand)
                ->type('description', $this->faker->sentence)
                ->type('brand', 'Mandaue Foam')
                ->click('#submit')
                ->assertSee('The quantity field is required');
        });
    }
    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @test
     */

    public function shouldReturnAnErrorWithoutBrand()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
            ]);
            $browser->loginAs($user)->visit(route('inventory.create'))
                ->type('name', $brand)
                ->type('description', $this->faker->sentence)
                ->type('quantity', 21)
                ->click('#submit')
                ->assertSee('The brand field is required');
        });
    }

    /**
     * A Dusk test example.
     *
     * @group Inventory
     * @test
     */

    public function shouldReturnAnErrorWithoutAll()
    {
        $this->browse(function (Browser $browser) {
            $brand = $this->faker->name;
            $user =factory(User::class)->create([
            'email' => 'jcwaga21@gmail.com',
            'password' => Hash::make('secret'),
            'purpose' => 'employee',
            ]);
            $browser->loginAs($user)->visit(route('inventory.create'))
            ->click('#submit')
            ->assertSee('The name field is required')
            ->assertSee('The description field is required')
            ->assertSee('The brand field is required')
            ->assertSee('The quantity field is required');
        });
    }
}
