<?php

use Cartalyst\Sentinel\Sentinel;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * @var Sentinel
     */
    private $sentinel;

    public function __construct(Sentinel $sentinel)
    {
        $this->sentinel = $sentinel;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmin();
        $this->createUser();
    }

    private function createAdmin()
    {
        $user = $this->sentinel->registerAndActivate([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => 'admin',
            'balance' => 1000,
        ]);

        $role = $this->sentinel->getRoleRepository()->createModel()->create([
            'id' => 1,
            'slug' => 'admin',
            'name' => 'Администратор',
            'permissions' => [
                'user.admin' => true
            ]
        ]);

        $role->users()->attach($user);
    }

    private function createUser()
    {
        $user = $this->sentinel->registerAndActivate([
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => 'user',
            'balance' => 0,
        ]);

        $role = $this->sentinel->getRoleRepository()->createModel()->create([
            'id' => 2,
            'slug' => 'user',
            'name' => 'Пользователь',
            'permissions' => [
                'user.admin' => false
            ]
        ]);

        $role->users()->attach($user);
    }
}
