<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleCliente = Role::create(['name' => 'cliente']);
        $roleClienteDistinguido = Role::create(['name' => 'cliente_distinguido']);

        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleAdmin);

        $user = new User;
        $user->name = 'Cliente';
        $user->email = 'cliente@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleCliente);

        $user = new User;
        $user->name = 'Cliente Especial';
        $user->email = 'cliente_especial@mail.com';
        $user->password = bcrypt('12345678');
        $user->save();
        $user->assignRole($roleClienteDistinguido);
    }
}
