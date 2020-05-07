<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class URegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function NewUserRegistrationTest()
    {
        $response = $this->get('/')   
                        ->click('Register')
                        ->seePageIs('/register')
                        ->type('name','Name')
                        ->type('name@gmail.com','E-Mail Address')
                        ->type('password','Password')
                        ->type('password','Conform Password')
                        ->press('Register')
                        ->seePageIs('/Profile');

        $response->assertStatus(200);
    }
}
