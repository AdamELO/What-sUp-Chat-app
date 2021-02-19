<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function ok_login_and_status()
    {
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', 'test@test.com')
            ->set('form.password', 'password123')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertRedirect('/dashboard');
        $this->assertTrue(User::whereEmail('test@test.com')->exists());
        $this->assertEquals('test@test.com', auth()->user()->email);
        $this->assertEquals(1, auth()->user()->status);
    }

    /** @test */
    function email_is_required()
    {
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', '')
            ->set('form.password', 'password123')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertHasErrors(['form.email' => 'required']);
    }


    /** @test */
    function email_is_valid_email()
    {
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', 'aeotest')
            ->set('form.password', 'password123')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertHasErrors(['form.email' => 'email']);
    }

    /** @test */
    function email_unique()
    {
        User::create([
            'name' => 'aeo',
            'email' => 'aeo@test.com',
            'password' => bcrypt('password123'),
            'avatar' => 'avatar.jpg',
            'status' => 0,
        ]);
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', 'aeo@test.com')
            ->set('form.password', 'password123')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertHasErrors(['form.email' => 'unique']);
    }
    /** @test */
    function password_required()
    {
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', 'aeo@test.com')
            ->set('form.password', '')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertHasErrors(['form.password' => 'required']);
    }
    /** @test */
    function password_equals_confirmation()
    {
        Livewire::test('register')
            ->set('form.name', 'aeo')
            ->set('form.email', 'aeo@test.com')
            ->set('form.password', 'password456')
            ->set('form.password_confirmation', 'password123')
            ->call('submitRegister')
            ->assertHasErrors(['form.password' => 'confirmed']);
    }
}
